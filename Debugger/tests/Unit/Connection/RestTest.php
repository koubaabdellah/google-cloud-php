<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Debugger\Tests\Unit\Connection;

use Google\Cloud\Core\RequestBuilder;
use Google\Cloud\Core\RequestWrapper;
use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Debugger\Connection\Rest;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @group debugger
 */
class RestTest extends TestCase
{
    private $requestWrapper;
    private $successBody;

    public function set_up()
    {
        $this->requestWrapper = $this->prophesize(RequestWrapper::class);
        $this->successBody = '{"canI":"kickIt"}';
    }

    public function testApiEndpoint()
    {
        $endpoint = 'https://foobar.com/';
        $rest = TestHelpers::stub(Rest::class, [
            [
                'apiEndpoint' => $endpoint
            ]
        ], ['requestBuilder']);

        $rb = $rest->___getProperty('requestBuilder');
        $r = new \ReflectionObject($rb);
        $p = $r->getProperty('baseUri');
        $p->setAccessible(true);

        $this->assertEquals($endpoint, $p->getValue($rb));
    }

    /**
     * @dataProvider methodProvider
     * @todo revisit this approach
     */
    public function testCallBasicMethods($method)
    {
        $options = [];
        $request = new Request('GET', '/somewhere');
        $response = new Response(200, [], $this->successBody);

        $requestBuilder = $this->prophesize(RequestBuilder::class);
        $requestBuilder->build(
            Argument::type('string'),
            Argument::type('string'),
            Argument::type('array')
        )->willReturn($request);

        $this->requestWrapper->send(
            Argument::type(RequestInterface::class),
            Argument::type('array')
        )->willReturn($response);

        $rest = new Rest();
        $rest->setRequestBuilder($requestBuilder->reveal());
        $rest->setRequestWrapper($this->requestWrapper->reveal());

        $this->assertEquals(json_decode($this->successBody, true), $rest->$method($options));
    }

    public function methodProvider()
    {
        return [
            ['listDebuggees'],
            ['registerDebuggee'],
            ['listBreakpoints'],
            ['updateBreakpoint'],
            ['setBreakpoint']
        ];
    }
}
