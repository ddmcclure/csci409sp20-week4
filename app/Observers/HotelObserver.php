<?php

namespace App\Observers;

use App\Models\Hotel;

class HotelObserver
{
    /**
     * Handle the hotel "created" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function created(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "creating" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function creating(Hotel $hotel)
    {
        //api key to access api
        $api_key = 'f4603e6b1c16e6dfcc0dc678ee0832ce';
        //endpoint url to access the 'forward' option
        $endpoint = 'http://api.positionstack.com/v1/forward';
        //parameters to put into the url
        $address = array(
            'location' => $hotel->address_1,
            'city' => $hotel->city,
            'state' => $hotel->state,
            'zip' => $hotel->zip
        );
        $params = array(
            '?access_key' => $api_key,
            'query' => "$address->location"." $address->city"." $address->state"." $address->zip",
            'output' => 'json'
        );
        //build url parameters
        $url_params = http_build_query($params);
        //decode the url or else it won't work for some reason
        $url = urldecode($endpoint.$url_params);
        //get the response
        $response = file_get_contents($url);
        //turn the json into an associative array
        $data = json_decode($response, true);
        //print data in readable format
        print_r($data);
        //specifically get the latitude and longitude
        foreach ($data as $geo) {
            $hotel->lat = $geo[0]['latitude'];
            $hotel->lon = $geo[0]['longitude'];
        }
    }

    /**
     * Handle the hotel "updated" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function updated(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function deleted(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "restored" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function restored(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "force deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function forceDeleted(Hotel $hotel)
    {
        //
    }
}
