<?php

namespace Lanziyun\PotentialTribble;

use GuzzleHttp\Client;

class TranslateService
{
    protected $client;
    protected $baseUrl;

    public function __construct(Client $client, string $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    public function getTranslation(string $originalName, string $originLang, string $targetLang): array
    {
        try {
            $response = $this->client->get("{$this->baseUrl}/api/v1/translate", [
                'query' => [
                    'source' => 8,
                    'word' => $originalName,
                    'originCode' => $originLang,
                    'translatedCode' => $targetLang ?? config('translation.default_target_lang'),
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception('Unable to fetch translated data: ' . $e->getMessage());
        }
    }
}
