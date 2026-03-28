<?php

namespace App\Controllers;

class Api extends BaseController
{
    public function exerciseIdea()
    {
        $url = 'https://wger.de/api/v2/exercise/?limit=20';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($response === false || $httpCode !== 200) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Could not load exercise idea right now.'
            ]);
        }

        $data = json_decode($response, true);

        if (!isset($data['results']) || empty($data['results'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No exercise ideas found.'
            ]);
        }

        $exercise = $data['results'][array_rand($data['results'])];

        $name = $exercise['name'] ?? 'Exercise idea';
        $description = $exercise['description'] ?? 'No description available.';

        $description = strip_tags($description);

        return $this->response->setJSON([
            'success' => true,
            'name' => $name,
            'description' => $description
        ]);
    }
}