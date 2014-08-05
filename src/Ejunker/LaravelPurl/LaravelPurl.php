<?php namespace Ejunker\LaravelPurl;

use Purl\Url;
use Illuminate\Http\Request;

class LaravelPurl {

    /** @var \Illuminate\Http\Request */
    protected $request;

    /**
     *
     * @param \Illuminate\Http\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Construct a new Purl instance.
     *
     * @param string $url
     * @return \Purl\Url
     */
    public function make($url)
    {
        return new Url($url);
    }

    /**
     * Get the request URL as a Purl instance.
     *
     * @return \Purl\Url
     */
    public function requestUrl()
    {
        $url = $this->request->url();

        return $this->make($url);
    }

    /**
     * Get the request root URL as a Purl instance.
     *
     * @return \Purl\Url
     */
    public function requestRoot()
    {
        $url = $this->request->root();

        return $this->make($url);
    }

    /**
     * Get the request full URL as a Purl instance.
     *
     * @return \Purl\Url
     */
    public function requestFullUrl()
    {
        $url = $this->request->fullUrl();

        return $this->make($url);
    }

}
