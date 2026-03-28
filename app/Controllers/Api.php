<?php

namespace App\Controllers;

class Api extends BaseController
{
    public function exerciseIdea()
    {
        // API URL
        $url = 'https://wger.de/api/v2/exercise/?limit=20';

        // Initialise cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Handle API failure
        if ($response === false || $httpCode !== 200) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Could not load exercise idea right now.'
            ]);
        }

        // Decode JSON
        $data = json_decode($response, true);

        // Check if results exist
        if (!isset($data['results']) || empty($data['results'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No exercise ideas found.'
            ]);
        }

        // Pick a random exercise
        $exercise = $data['results'][array_rand($data['results'])];

        // Get name
        $name = $exercise['name'] ?? 'Exercise idea';

        // Clean description (remove HTML)
        $description = strip_tags($exercise['description'] ?? '');

        // If description is empty, use fallback
        if (empty(trim($description))) {
            $description = 'A useful exercise to improve your strength and fitness.';
        }

        // Return JSON response
        return $this->response->setJSON([
            'success' => true,
            'name' => $name,
            'description' => $description
        ]);
    }
}