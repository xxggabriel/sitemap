<?php

namespace Sitemap\SitemapGenerator;

class SitemapGenerator
{

    protected $sitemap = [];

    public function addUrl($url, $lastmod = null, $priority = 0.80, $changefreq = null)
    {
        $this->sitemap[$url] = [
            "lastmod" => $lastmod,
            "priority" => $priority,
            "changefreq" => $changefreq,
        ];
    }

    public function hasUrl($url)
    {
        return empty(@$this->sitemap[$url]) ? false : true;
    }

    public function render()
    {
        $sitemap = $this->sitemap;
        return response(view('sitemap::sitemap', compact('sitemap'))->render(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
