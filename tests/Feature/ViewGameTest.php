<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class ViewGameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_game_page_shows_correct_game_info()
    {
        Http::fake([
            // Stub a string response for all other endpoints...
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show', 'marvels-guardians-of-the-galaxy'));

        $response->assertSuccessful();
    }

    private function fakeSingleGame()
    {
        return Http::response(
            [
                0 => [
                    "id" => 152249,
                    "aggregated_rating" => 81.1,
                    "cover" => [
                        "id" => 152562,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co39pu.jpg"
                    ],
                    "first_release_date" => 1635206400,
                    "genres" => [
                        0 => [
                            "id" => 5,
                            "name" => "Shooter",
                        ],
                        1 => [
                            "id" => 12,
                            "name" => "Role-playing (RPG)",
                        ],
                        2 => [
                            "id" => 31,
                            "name" => "Adventure",
                        ],
                    ],
                    "involved_companies" => [
                        0 => [
                            "id" => 139184,
                            "company" => [
                                "id" => 26,
                                "name" => "Square Enix",
                            ],
                        ],
                        1 => [
                            "id" => 152903,
                            "company" => [
                                "id" => 27,
                                "name" => "Eidos Montréal",
                            ],
                        ],
                    ],
                    "name" => "Marvel's Guardians of the Galaxy",
                    "platforms" => [
                        0 => [
                            "id" => 6,
                            "abbreviation" => "PC",
                        ],
                        1 => [
                            "id" => 48,
                            "abbreviation" => "PS4",
                        ],
                        2 => [
                            "id" => 49,
                            "abbreviation" => "XONE",
                        ],
                        3 => [
                            "id" => 167,
                            "abbreviation" => "PS5",
                        ],
                        4 => [
                            "id" => 169,
                            "abbreviation" => "Series X",
                        ]
                    ],
                    "rating" => 79.499807855388,
                    "screenshots" => [
                        0 => [
                            "id" => 489104,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 152249,
                            "height" => 2160,
                            "image_id" => "scahe8",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/scahe8.jpg",
                            "width" => 3840,
                            "checksum" => "7f2454ff-c5ea-8b27-2fb5-55c5afdd7b44",
                        ],
                        1 => [
                            "id" => 489105,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 152249,
                            "height" => 2160,
                            "image_id" => "scahe9",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/scahe9.jpg",
                            "width" => 3840,
                            "checksum" => "cffdc2be-23af-092f-9a19-9b952940cefd",
                        ],
                        2 => [
                            "id" => 489106,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 152249,
                            "height" => 2160,
                            "image_id" => "scahea",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/scahea.jpg",
                            "width" => 3840,
                            "checksum" => "71463b46-b713-d031-4f04-be98c74900cd",
                        ],
                        3 => [
                            "id" => 489107,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 152249,
                            "height" => 2160,
                            "image_id" => "scaheb",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/scaheb.jpg",
                            "width" => 3840,
                            "checksum" => "0982bbb7-f2be-63a8-0faa-e11ace7baa55",
                        ],
                        4 => [
                            "id" => 489108,
                            "alpha_channel" => false,
                            "animated" => false,
                            "game" => 152249,
                            "height" => 2160,
                            "image_id" => "scahec",
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/scahec.jpg",
                            "width" => 3840,
                            "checksum" => "4ab844e8-0bf2-ae6e-7cad-8f05d4cca21c",
                        ]
                    ],
                    "similar_games" => [
                        0 => [
                            "id" => 25311,
                            "cover" => [
                                "id" => 68395,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/rmzcpsfvnizymkhvd0qg.jpg",
                            ],
                            "name" => "Star Control: Origins",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ]
                            ],
                            "rating" => 73.800935203741,
                            "slug" => "star-control-origins",
                        ],
                        1 => [
                            "id" => 55038,
                            "cover" => [
                                "id" => 82160,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1re8.jpg",
                            ],
                            "name" => "Immortal: Unchained",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ]
                            ],
                            "rating" => 53.409372675428,
                            "slug" => "immortal-unchained",
                        ],
                        2 => [
                            "id" => 103276,
                            "cover" => [
                                "id" => 112088,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ehk.jpg",
                            ],
                            "name" => "Anthem: Legion of Dawn Edition",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ]
                            ],
                            "rating" => 60.507487382111,
                            "slug" => "anthem-legion-of-dawn-edition"
                        ],
                        3 => [
                            "id" => 105049,
                            "cover" => [
                                "id" => 75344,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1m4w.jpg",
                            ],
                            "name" => "Remnant: From the Ashes",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC",
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4",
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE",
                                ],
                                3 => [
                                    "id" => 167,
                                    "abbreviation" => "PS5"
                                ]
                            ],
                            "rating" => 80.608008897048,
                            "slug" => "remnant-from-the-ashes"
                        ],
                        4 => [
                            "id" => 105269,
                            "cover" => [
                                "id" => 82218,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rfu.jpg",
                            ],
                            "name" => "Gene Rain",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC"
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4"
                                ],
                                2 =>  [
                                    "id" => 49,
                                    "abbreviation" => "XONE"
                                ]
                            ],
                            "slug" => "gene-rain"
                        ],
                        5 => [
                            "id" => 107318,
                            "cover" => [
                                "id" => 113273,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2feh.jpg"
                            ],
                            "name" => "Rebel Galaxy Outlaw",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC"
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4"
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE"
                                ],
                                3 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch"
                                ]
                            ],
                            "slug" => "rebel-galaxy-outlaw"
                        ],
                        6 => [
                            "id" => 113114,
                            "cover" => [
                                "id" => 111992,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2eew.jpg"
                            ],
                            "name" => "The Outer Worlds",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC"
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4"
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE"
                                ],
                                3 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch"
                                ]
                            ],
                            "rating" => 81.734470778214,
                            "slug" => "the-outer-worlds"
                        ],
                        7 => [
                            "id" => 152370,
                            "cover" => [
                                "id" => 152922,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co39zu.jpg"
                            ],
                            "name" => "Marvel's Guardians of the Galaxy: Cloud Version",
                            "platforms" => [
                                0 => [
                                    "id" => 130,
                                    "abbreviation" => "Switch"
                                ]
                            ],
                            "slug" => "marvels-guardians-of-the-galaxy-cloud-version"
                        ],
                        8 => [
                            "id" => 153019,
                            "cover" => [
                                "id" => 161695,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3grj.jpg"
                            ],
                            "name" => "Marvel’s Guardians of the Galaxy: Cosmic Deluxe Edition",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC"
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4"
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE"
                                ],
                                3 => [
                                    "id" => 167,
                                    "abbreviation" => "PS5"
                                ],
                                4 =>  [
                                    "id" => 169,
                                    "abbreviation" => "Series X"
                                ]
                            ],
                            "slug" => "marvels-guardians-of-the-galaxy-cosmic-deluxe-edition",
                        ],
                        9 => [
                            "id" => 169197,
                            "cover" => [
                                "id" => 177690,
                                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co3t3u.jpg"
                            ],
                            "name" => "Marvel's Guardians of the Galaxy: Digital Deluxe Edition",
                            "platforms" => [
                                0 => [
                                    "id" => 6,
                                    "abbreviation" => "PC"
                                ],
                                1 => [
                                    "id" => 48,
                                    "abbreviation" => "PS4"
                                ],
                                2 => [
                                    "id" => 49,
                                    "abbreviation" => "XONE"
                                ],
                                3 => [
                                    "id" => 167,
                                    "abbreviation" => "PS5"
                                ],
                                4 => [
                                    "id" => 169,
                                    "abbreviation" => "Series X"
                                ]
                            ],
                            "slug" => "marvels-guardians-of-the-galaxy-digital-deluxe-edition"
                        ]
                    ],
                    "slug" => "marvels-guardians-of-the-galaxy",
                    "summary" => "Fire up a wild ride across the cosmos with a fresh take on Marvel’s Guardians of the Galaxy. In this action-adventure game, you are 
          Star-Lord leading the unpredictable Guardians from one explosion of chaos to the next. You got this. Probably.",
                    "videos" => [
                        0 => [
                            "id" => 50918,
                            "game" => 152249,
                            "name" => "Trailer",
                            "video_id" => "u7e5nAUvxIs",
                            "checksum" => "d99e445f-49bb-7591-5cac-8d1acf5d6e4a"
                        ],
                        1 => [
                            "id" => 50931,
                            "game" => 152249,
                            "name" => "Announcement Trailer",
                            "video_id" => "f-jFYYMkJh4",
                            "checksum" => "5930be98-3f03-2151-92b6-dab9a70031ce"
                        ],
                        2 => [
                            "id" => 54556,
                            "game" => 152249,
                            "name" => "Trailer",
                            "video_id" => "szsW6vCWCI8",
                            "checksum" => "460f3ed0-159e-03d6-c1ea-e4982dbda6ea"
                        ],
                        3 => [
                            "id" => 55357,
                            "game" => 152249,
                            "name" => "Trailer",
                            "video_id" => "h9AlLQ9FGmU",
                            "checksum" => "46fb26a5-4774-9dcc-a881-019ef09e147c"
                        ],
                        4 => [
                            "id" => 55380,
                            "game" => 152249,
                            "name" => "Trailer - Japanese",
                            "video_id" => "vUumGc8pU6k",
                            "checksum" => "bdd33a2c-1b72-85b2-9be1-a05416c5413b"
                        ],
                        5 => [
                            "id" => 57423,
                            "game" => 152249,
                            "name" => "Launch Trailer",
                            "video_id" => "2xoTY5Mu4-g",
                            "checksum" => "45d5be56-ecce-a2d9-5ebf-5b40bdce1480"
                        ]
                    ],
                    "websites" => [
                        0 => [
                            "id" => 186582,
                            "category" => 13,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://store.steampowered.com/app/1088850",
                            "checksum" => "4ae2d243-ef8c-fc50-80cc-81a90f651182"
                        ],
                        1 => [
                            "id" => 186583,
                            "category" => 16,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://www.epicgames.com/p/marvels-guardians-of-the-galaxy",
                            "checksum" => "3301113a-f435-982c-2f89-e6aa7cc22646"
                        ],
                        2 => [
                            "id" => 186584,
                            "category" => 1,
                            "game" => 152249,
                            "trusted" => false,
                            "url" => "https://guardiansofthegalaxy.square-enix-games.com/",
                            "checksum" => "921b4e11-02d5-4ee1-9b9a-821f531bbb5a"
                        ],
                        3 => [
                            "id" => 186585,
                            "category" => 9,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://www.youtube.com/user/EidosMontreal",
                            "checksum" => "cf8c05d1-6b51-b4c8-f397-a6655e4ec08c"
                        ],
                        4 => [
                            "id" => 186586,
                            "category" => 4,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://www.facebook.com/GOTGTheGame",
                            "checksum" => "db039178-d3b3-a7c0-0ad7-ee3d4fda92e3"
                        ],
                        5 => [
                            "id" => 186587,
                            "category" => 5,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://twitter.com/GOTGTheGame",
                            "checksum" => "5e96a5ff-8cce-8ac7-5ff4-6879e0606856"
                        ],
                        6 => [
                            "id" => 186588,
                            "category" => 8,
                            "game" => 152249,
                            "trusted" => true,
                            "url" => "https://www.instagram.com/GOTGTheGame",
                            "checksum" => "80b8f5eb-fd4f-3cde-6a7d-522be7325992"
                        ],
                        7 => [
                            "id" => 228532,
                            "category" => 2,
                            "game" => 152249,
                            "trusted" => false,
                            "url" => "https://disney.fandom.com/wiki/Guardians_of_the_Galaxy_(upcoming_game)",
                            "checksum" => "2b7914cc-9549-c31f-41db-275b9dde9420"
                        ],
                        "trusted" => true,
                        "url" => "https://en.wikipedia.org/wiki/Guardians_of_the_Galaxy_(video_game)",
                        "checksum" => "a35602bb-88f1-1fd5-7490-0d7164945e12"
                    ],
                ]
            ],
        );
    }
}
