<?php

class LaravelPurlTest extends PHPUnit_Framework_TestCase {

    protected $purl;
    protected $url;

    public function setUp()
    {
        $this->request = \Illuminate\Http\Request::create('http://www.laravel.com/docs', 'GET', array('q' => 'eloquent'));
        $this->purl = new \Ejunker\LaravelPurl\LaravelPurl($this->request);
        $this->url = $this->purl->make('http://www.laravel.com/docs?q=eloquent&page=1');
    }

    public function testMake()
    {
        $this->assertInstanceOf('Purl\Url', $this->url);
    }

    public function testRequestUrl()
    {
        $this->assertInstanceOf('Purl\Url', $this->purl->requestUrl());
        $this->assertEquals($this->request->url(), $this->purl->requestUrl());
    }

    public function testRequestRoot()
    {
        $this->assertInstanceOf('Purl\Url', $this->purl->requestRoot());
        $this->assertEquals($this->request->root(), rtrim($this->purl->requestRoot(), '/'));
    }

    public function testRequestFullUrl()
    {
        $this->assertInstanceOf('Purl\Url', $this->purl->requestFullUrl());
        $this->assertEquals($this->request->fullUrl(), $this->purl->requestFullUrl());
    }

}
