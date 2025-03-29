<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Google\Client as GoogleClient;

trait FCMNotification
{
    public static function getAccessToken()
    {
        // Define the path to your service account JSON file
        $serviceAccountFile = storage_path('app/public/service-account.json');

        // Create a new Google Client
        $client = new GoogleClient();
        $client->setAuthConfig($serviceAccountFile);

        // Define the required scopes
        $scopes = ['https://www.googleapis.com/auth/firebase.messaging'];

        // Set the scopes for the client
        $client->setScopes($scopes);

        // Get the access token
        $accessToken = $client->fetchAccessTokenWithAssertion();

        // Return the access token
        return $accessToken['access_token'];
    }

    /**
     * example of parameter
     * $deviceToken = "string"
     * $notification = [
        'title' => __('general.order_push_title', [], $user->app_lang),
        'title_ar' => __('general.order_push_title', [], 'ar'),
        'title_en' => __('general.order_push_title', [], 'en'),
        'title_fr' => __('general.order_push_title', [], 'fr'),
        'body' => __('general.order_push_body', [], $user->app_lang),
        'body_ar' => __('general.order_push_body', [], 'ar'),
        'body_en' => __('general.order_push_body', [], 'en'),
        'body_fr' => __('general.order_push_body', [], 'fr'),
        'order_id' => $order->id,
        'type' => 'order_status',
        ];
     *
     */
    public static function sendFCMNotification($notification, $deviceToken)
    {
        $url = "https://fcm.googleapis.com/v1/projects/aloo-dc/messages:send";
        try {
            $header = array(
                "authorization: Bearer " . self::getAccessToken(),
                "content-type: application/json"
            );
            $postdata = '{
            "message": {
                "token" : "' . $deviceToken . '",
                "data" : {
                    "title":"' . $notification['title'] . '",
                    "title_ar":"' . $notification['title_ar'] . '",
                    "title_en":"' . $notification['title_en'] . '",
                    "title_fr":"' . $notification['title_fr'] . '",
                    "body" : "' . $notification['body'] . '",
                    "body_ar" : "' . $notification['body_ar'] . '",
                    "body_en" : "' . $notification['body_en'] . '",
                    "body_fr" : "' . $notification['body_fr'] . '",
                    "image" : "",
                    "image_url" : "",
                    "order_id":"' . $notification['order_id'] . '",
                    "title_loc_key":"' . $notification['order_id'] . '",
                    "body_loc_key":"' . $notification['type'] . '",
                    "type":"' . $notification['type'] . '",
                    "is_read": "0",
                    "icon" : "new",
                    "sound": "notification.wav",
                    "android_channel_id": "qareeb"
                },
                "notification" : {
                    "title" :"' . $notification['title'] . '",
                    "body" : "' . $notification['body'] . '",
                },
                "apns": {
                  "payload": {
                    "aps": {
                      "mutable-content": 1,
                      "sound": "default"
                    }
                  },
                  "fcm_options": {
                    "image" : "",
                  }
                },
                "webpush": {
                    "headers": {
                      "image" : "",
                    }
                },
            }
        }';
            $ch = curl_init();
            $timeout = 120;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

            // Get URL content
            $result = curl_exec($ch);
            // close handle to release resources
            curl_close($ch);
            return $result;
        } catch (\Exception $e) {
            // Log the exception and return a meaningful message
            Log::error('Exception occurred while sending FCM notification', [
                'exception' => $e->getMessage()
            ]);
        }
    }
}
