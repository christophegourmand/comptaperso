<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iconRecords = [
            // SECTION - general icons

            //--- buildings and locations
            ['category' => 'Lieux' , 'google_icon_ref' => 'home' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'house' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'location_city' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'home_work' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'laundry' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'gite' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'nest_multi_room' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => 'castle' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Lieux' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- people
            ['category' => 'Personnes' , 'google_icon_ref' => 'woman' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'man' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'boy' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'pregnant_woman' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'elderly_woman' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'elderly' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'girl' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'child_care' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'stroller' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => 'family_restroom' , 'position' => '1'],
            ['category' => 'Personnes' , 'google_icon_ref' => '' , 'position' => '1'],

            // SECTION - type of bills icons

            //--- ELEMENTS and Nature
            ['category' => 'Nature' , 'google_icon_ref' => 'sunny' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'air' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'public' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'eco' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'forest' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'rainy' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'potted_plant' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => 'local_florist' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nature' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- energy
            ['category' => 'Énergies' , 'google_icon_ref' => 'fireplace' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'nest_true_radiant' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'cool_to_dry' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'water_drop' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'airwave' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'recycling' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'bolt' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'flash_on' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'offline_bolt' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'propane' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'valve' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'ac_unit' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'hotel' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => 'dry_cleaning' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Énergies' , 'google_icon_ref' => '' , 'position' => '1'],


            //--- HEALTH
            ['category' => 'Santé' , 'google_icon_ref' => 'health_and_safety' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'monitor_heart' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'medication' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'healing' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'masks' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'dentistry' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'visibility' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => 'accessible' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Santé' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- GROCERIES / FOOD
            ['category' => 'Courses' , 'google_icon_ref' => 'storefront' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'shopping_cart' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'shopping_bag' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'bakery_dining' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'cookie' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'egg' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'cleaning_services' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => 'icecream' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Courses' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- communication, internet, devices
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'power_rounded' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'wifi' , 'position' => '1'], // wifi
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'battery_horiz_075' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'cloudy' , 'position' => '1'], // for icloud
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'alternate_email' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'mail' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'folder' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'cloud_upload' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'perm_media' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'data_object' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'music_note' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'smart_display' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'tv' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'smartphone' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'signal_cellular_alt' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'call' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => 'devices' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Nouvelles technologies' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- hobbies , activities , going out (resto, cinema)
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'stadia_controller' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'lunch_dining' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'local_bar' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'sports_bar' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'coffee' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'local_pizza' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'ramen_dining' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'photo_camera' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'brush' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'mic_external_on' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'piano' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'fitness_center' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'sports_soccer' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'sports_tennis' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'movie' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'theater_comedy' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'stadium' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => 'pool' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Loisirs et sorties' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- objects
            ['category' => 'Objets' , 'google_icon_ref' => 'floor_lamp' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => 'credit_score' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => 'smoking_rooms' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => 'laundry' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Objets' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- BANK
            ['category' => 'Banque' , 'google_icon_ref' => 'payments' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => 'credit_card' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => 'savings' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => 'euro' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => 'currency_exchange' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => 'currency_bitcoin' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Banque' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- self care
            ['category' => 'Soins' , 'google_icon_ref' => 'self_care' , 'position' => '1'],
            ['category' => 'Soins' , 'google_icon_ref' => 'spa' , 'position' => '1'],
            ['category' => 'Soins' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Soins' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Soins' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- holidays
            ['category' => 'Vacances' , 'google_icon_ref' => 'landscape' , 'position' => '1'],
            ['category' => 'Vacances' , 'google_icon_ref' => 'surfing' , 'position' => '1'],
            ['category' => 'Vacances' , 'google_icon_ref' => 'flight_takeoff' , 'position' => '1'],
            ['category' => 'Vacances' , 'google_icon_ref' => 'beach_access' , 'position' => '1'],
            ['category' => 'Vacances' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- travaux / maintenance
            ['category' => 'Maintenance' , 'google_icon_ref' => 'tools_power_drill' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => 'tools_pliers_wire_stripper' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => 'detector_alarm' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => 'tools_wrench' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => 'grass' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => 'plumbing' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Maintenance' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- projects
            ['category' => 'Projets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Projets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Projets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Projets' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Projets' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- professional expenses
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'work' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'local_taxi' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'hail' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'restaurant' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'local_bar' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'local_cafe' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => 'supervisor_account' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Frais professionnels' , 'google_icon_ref' => '' , 'position' => '1'],

            //--- car / car-expenses / other transportations
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'directions_car' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'electric_car' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'train' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'flight' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'local_taxi' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'sailing' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'local_shipping' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'tram' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'subway' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'motorcycle' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'electric_scooter' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'directions_bike' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'electric_bike' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'snowmobile' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'agriculture' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'airport_shuttle' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'local_gas_station' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'ev_charger' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'oil_barrel' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'garage' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'build' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'verified' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'local_car_wash' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => 'signpost' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
            ['category' => 'Véhicule - transports' , 'google_icon_ref' => '' , 'position' => '1'],
        ];

        foreach($iconRecords as $iconRecord)
        {
            if ( !empty( $iconRecord['google_icon_ref'] ) )
            {
                Icon::factory()->create($iconRecord);
            }
        }
    }
}
