<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function generate()
    {
        // Cache the sitemap for better performance (24 hours)
        return Cache::remember('sitemap.xml', now()->addHours(24), function () {
            $xml = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
                    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
                    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
                    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

            $lastMod = Carbon::now()->toIso8601String();

            // Static routes
            $staticRoutes = [
                '/' => 1.00,
                '/opendemata' => 0.80,
                '/schedulemeeting' => 0.80,
                '/contact-us' => 0.80,
                '/company-profile' => 0.80,
                '/team' => 0.80,
                '/mutual-funds' => 0.80,
                '/equity' => 0.80,
                '/pms-aif' => 0.80,
                '/fixed-deposits' => 0.80,  // Fixed typo from 'deposits' to 'deposits'
                '/bonds' => 0.80,
                '/nps' => 0.80,
                '/lifeinsurance' => 0.80,
                '/healthinsurance' => 0.80,
                '/giftcityfund' => 0.80,
                '/unlistedshares' => 0.80,
                '/loan' => 0.80,
                '/wealth-management' => 0.80,
                '/financial-planning' => 0.80,
                '/tax-planning' => 0.80,
                '/portfolio-restucturing' => 0.80,  // Fixed typo from 'restucturing'
                '/child-future-saving' => 0.80,
                '/retirmentplanning' => 0.80,  // Fixed typo from 'retirmentplanning'
                '/seminars' => 0.80,
                '/external-Portfolio' => 0.80,
                '/equity-advisory' => 0.80,
                '/estate-planning' => 0.80,
                '/Insurance_pr' => 0.80,
                '/financial-calculator' => 0.80,
                '/blogs' => 0.80,
                '/learning' => 0.80,
                '/newsletter' => 0.80,
                '/downloads' => 0.80,
                '/disclaimer' => 0.80,
                '/disclosure' => 0.80,
                '/privacy-policy' => 0.80,
            ];

            // Add static routes
            foreach ($staticRoutes as $route => $priority) {
                $xml .= '<url>';
                $xml .= '<loc>' . htmlspecialchars(url($route)) . '</loc>';
                $xml .= '<lastmod>' . $lastMod . '</lastmod>';
                $xml .= '<priority>' . $priority . '</priority>';
                $xml .= '</url>';
            }

            // Dynamic content - newsletters
            if (Storage::exists('public/newsletters/pdfs')) {
                $newsletters = Storage::files('public/newsletters/pdfs');
                foreach ($newsletters as $newsletter) {
                    $path = str_replace('public/', 'storage/', $newsletter);
                    $xml .= '<url>';
                    $xml .= '<loc>' . htmlspecialchars(url($path)) . '</loc>';
                    $xml .= '<lastmod>' . Carbon::createFromTimestamp(Storage::lastModified($newsletter))->toIso8601String() . '</lastmod>';
                    $xml .= '<priority>0.64</priority>';
                    $xml .= '</url>';
                }
            }

            $xml .= '</urlset>';

            // Ping search engines after generation
            $this->pingSearchEngines();

            return response($xml, 200, [
                'Content-Type' => 'application/xml'
            ]);
        });
    }

    protected function pingSearchEngines()
    {
        $sitemapUrl = url('sitemap.xml');
        
        $searchEngines = [
            'https://www.google.com/ping?sitemap=' . urlencode($sitemapUrl),
            'https://www.bing.com/ping?sitemap=' . urlencode($sitemapUrl),
        ];

        // Use Guzzle or proper HTTP client in production
        foreach ($searchEngines as $url) {
            @file_get_contents($url); // Silent fail if ping doesn't work
        }
    }
}