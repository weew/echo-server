<?php

namespace Weew\EchoServer;

use Weew\Http\IHttpRequest;
use Weew\Http\Responses\JsonResponse;

class EchoServer {
    /**
     * @param IHttpRequest $request
     */
    public function handle(IHttpRequest $request) {
        $data = $this->extractRequestData($request);
        $this->sendJsonResponse($data);
    }

    /**
     * @param array $data
     */
    protected function sendJsonResponse(array $data) {
        $response = new JsonResponse();
        $response->setJsonContent($data, JSON_PRETTY_PRINT);

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
}
