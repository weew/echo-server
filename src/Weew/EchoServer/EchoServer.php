<?php

namespace Weew\EchoServer;

use Weew\Http\IHttpRequest;
use Weew\Http\Responses\JsonResponse;

class EchoServer {
    /**
     * @var string
     */
    protected $trunksPath;

    /**
     * @var bool
     */
    protected $trunkAll = false;

    /**
     * EchoServer constructor.
     */
    public function __construct() {
        $this->trunksPath = path(WEB_DIR, '/trunks');
    }

    /**
     * @param IHttpRequest $request
     */
    public function handle(IHttpRequest $request) {
        $data = $this->extractRequestData($request);
        $this->addToTrunk($request, $data);
        $this->sendJsonResponse($data);
    }

    /**
     * @param array $data
     */
    protected function sendJsonResponse(array $data) {
        $response = new JsonResponse();
        $response->setContent(json_encode($data, JSON_PRETTY_PRINT));

        $response->send();
    }

    /**
     * @param IHttpRequest $request
     *
     * @return array
     */
    protected function extractRequestData(IHttpRequest $request) {
        $data = $request->toArray();
        $data['url'] = $request->getUrl()->toArray();
        $data['url']['full'] = $request->getUrl()->toString();

        return $data;
    }

    /**
     * @param IHttpRequest $request
     * @param array $data
     */
    protected function addToTrunk(IHttpRequest $request, array $data) {
        $trunk = $request->getUrl()->getQuery()->get('trunk', 'default');

        if ($trunk !== null || $this->trunkAll) {
            $trunk = str_replace(['/', '.'], '', $trunk);

            if (strlen($trunk) > 0) {
                $path =  path($this->trunksPath, $trunk . '.txt');

                if ( ! file_exists($path)) {
                    file_create($path);
                }

                file_append($path, s("\n\n%s %s\n\n", date('c'), str_repeat('=', 80)));
                file_append($path, json_encode($data, JSON_PRETTY_PRINT));
            }
        }
    }
}
