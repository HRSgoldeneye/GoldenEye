<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use Elastica\Client as ElasticaClient;

class ClientController extends Controller
{
    protected $elasticsearch;

    protected $elastica;

    public function __construct() {
        $this->elasticsearch = ClientBuilder::create()->build();

        $elasticaConfig = [
            'host' => 'localhost',
            'port' => 9200,
            'index' => 'pets'
        ];

        $this->elastica = new ElasticaClient($elasticaConfig);
    }

    public function elasticSearchTest() {
        dump($this->elasticsearch);

        echo "\n\nRetrieve a Document:\n";
        $params = [
            
        ];
    }
    //
}
