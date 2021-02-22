<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
            [
                [
                    'company' => 'GreenPeace',
                    'address' => 'Chaussée de Haecht 159, 1030 Schaerbeek',
                    'phone' => '+325484595',
                    'email' => 'greenpeace@gmail.com',
                    'name' => 'Georges',
                    'surname' => 'Batanga',
                    'src' => 'https://siena.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2019/12/11/node_488669/1753091/public/2019/12/11/B9721899900Z.1_20191211195854_000%2BG47F3R0PL.1-0.jpg?itok=A6zebxO61576090741'
                ],
                [
                    'company' => 'Amnesty International',
                    'address' => 'Chaussée de Wavre 169, 1050 Bruxelles',
                    'phone' => '+3254789825',
                    'email' => 'amnesty@amnesty.com',
                    'name' => 'Alexeï',
                    'surname' => 'Navalny',
                    'src' => 'https://i1.wp.com/www.blegny.be/wp-content/uploads/2017/03/amnesty_international.jpg?fit=308%2C294&ssl=1'
                ],
                [
                    'company' => 'WWF',
                    'address' => 'Boulevard Emile Jacqmain 90, 1000 Bruxelles',
                    'phone' => '+324587956',
                    'email' => 'wwf@gmail.com',
                    'name' => 'Bin',
                    'surname' => 'Dim',
                    'src' => 'https://pbs.twimg.com/profile_images/700607704151126016/FjtJU4W4_400x400.jpg'
                ],
                [
                    'company' => 'APEFE',
                    'address' => 'Place Sainctelette 2, 1080 Bruxelles',
                    'phone' => '+32242154824',
                    'email' => 'apefe@gmail.com',
                    'name' => 'Luc',
                    'surname' => 'Ameye',
                    'src' => 'https://pbs.twimg.com/profile_images/378800000820229408/43255550105ea92fd865076c5a018394_400x400.jpeg'
                ],
                [
                    'company' => 'Oxfam',
                    'address' => 'Rue du Bailli 96, 1050 Ixelles',
                    'phone' => '+325485921',
                    'email' => 'oxfam@gmail.com',
                    'name' => 'Virginie',
                    'surname' => 'Coletta',
                    'src' => 'https://www.guidesocial.be/_images/thumbs/activity/350x350/151620360562.jpg'
                ],
                [
                    'company' => 'Sea Shepherd',
                    'address' => 'Rue des Palais 44, 1030 Schaerbeek',
                    'phone' => '+325486515',
                    'email' => 'seasheperd@gmail.com',
                    'name' => 'Paul',
                    'surname' => 'Watson',
                    'src' => 'https://yt3.ggpht.com/ytc/AAUvwniTP-k7p975_oKrCcHWjqejL88U6mnXCr3QI7Yj=s900-c-k-c0x00ffffff-no-rj'
                ]
            ]
        );
    }
}
