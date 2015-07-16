<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 14/07/2015
 * Time: 17:42
 */

namespace App\Http\Controllers;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class scraper extends Controller
{
    public function scrape()
    {
        $client = new Client();
        $baseURL = 'http://www.symfony.com/';
        $urlEndpoint = 'blog';

        /*$crawler = $client->request('GET', $baseURL . $urlEndpoint);*/
        $crawler = $client->request('GET', 'http://aminekarmouche.github.io/');
        $crawler->filter('h2')->each(function ($node) {
            print $node->text()."\n";
        });

    }
}