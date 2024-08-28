<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\FirebaseException;

class CircularController extends Controller
{
    private $firebaseDatabase;

    public function __construct()
    {
        try {
            $credentialsPath = storage_path('app/firebase/andavarcon-firebase-adminsdk.json');
            $databaseUrl = 'https://andavarcon-default-rtdb.asia-southeast1.firebasedatabase.app';

            $factory = (new Factory)
                ->withServiceAccount($credentialsPath)
                ->withDatabaseUri($databaseUrl);

            $this->firebaseDatabase = $factory->createDatabase();
        } catch (FirebaseException $e) {
            Log::error('Firebase initialization error: ' . $e->getMessage());
            abort(500, 'Could not initialize Firebase');
        }
    }

    public function getData(Request $request)
    {
        try {
            $reference = $this->firebaseDatabase->getReference('circulars');
            $data = $reference->getValue();
            Log::debug('Data retrieved from Firebase Realtime Database:', [$data]);

            return view('pages.circulars', ['circulars' => $data]);
        } catch (FirebaseException $e) {
            Log::error('Error retrieving data from Firebase Realtime Database:', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'previous' => $e->getPrevious() ? $e->getPrevious()->getMessage() : null,
            ]);
            return response()->json(['error' => 'Failed to retrieve data from Firebase Realtime Database'], 500);
        }
    }

    public function getDataCircular(Request $request)
    {
        try {
            $reference = $this->firebaseDatabase->getReference('events');
            $data = $reference->getValue();
            Log::debug('Data retrieved from Firebase Realtime Database:', [$data]);

            return view('pages.events', ['events' => $data]);
        } catch (FirebaseException $e) {
            Log::error('Error retrieving data from Firebase Realtime Database:', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'previous' => $e->getPrevious() ? $e->getPrevious()->getMessage() : null,
            ]);
            return response()->json(['error' => 'Failed to retrieve data from Firebase Realtime Database'], 500);
        }
    }

    public function cshow($id)
    {
        $circular = $this->firebaseDatabase->getReference('circulars')->getChild($id)->getValue();
        $allCirculars = $this->firebaseDatabase->getReference('circulars')->getValue();
        $latestCirculars = array_slice($this->array_sort($allCirculars, 'created_timestamp', SORT_DESC), 0, 5);
        return view('pages.circulars.show', ['circular' => $circular, 'latestCirculars' => $latestCirculars]);
    }


    public function eshow($id)
    {
        $events = $this->firebaseDatabase->getReference('events')->getChild($id)->getValue();
        $allCirculars = $this->firebaseDatabase->getReference('events')->getValue();
        $latestEvents = array_slice($this->array_sort($allCirculars, 'created_timestamp', SORT_DESC), 0, 5);
        return view('pages.events.show', ['events' => $events, 'latestEvents' => $latestEvents]);
    }

    private function array_sort($array, $on, $order = SORT_ASC)
    {
        $new_array = array();
        foreach ($array as $key => $value) {
            $new_array[$key] = $value[$on];
        }
        array_multisort($new_array, $order, $array);
        return $array;
    }

    public function getEvent(Request $request)
    {
        try {
            $reference = $this->firebaseDatabase->getReference('events');
            $data = $reference->getValue();
            Log::debug('Data retrieved from Firebase Realtime Database:', [$data]);
            return response()->json($data);
        } catch (FirebaseException $e) {
            Log::error('Error retrieving data from Firebase Realtime Database:', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'previous' => $e->getPrevious() ? $e->getPrevious()->getMessage() : null,
            ]);
            return response()->json(['error' => 'Failed to retrieve data from Firebase Realtime Database'], 500);
        }
    }
}
