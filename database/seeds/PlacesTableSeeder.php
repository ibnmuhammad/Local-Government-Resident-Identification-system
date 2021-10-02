<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'region' => 'Dar es Salaam',
            'district' => 'Ilala'
        ]);
        DB::table('places')->insert([
            'region' => 'Dar es Salaam',
            'district' => 'Kinondoni'
        ]);
        DB::table('places')->insert([
            'region' => 'Dar es Salaam',
            'district' => 'Temeke'
        ]);
        DB::table('places')->insert([
            'region' => 'Dar es Salaam',
            'district' => 'Kigamboni'
        ]);
        DB::table('places')->insert([
            'region' => 'Dar es Salaam',
            'district' => 'Ubungo'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Meru'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Arusha Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Arusha Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Karatu'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Longido'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Monduli'
        ]);
        DB::table('places')->insert([
            'region' => 'Arusha',
            'district' => 'Ngorongoro'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Bahi'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Chamwino'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Chemba'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Dodoma Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Kondoa'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Kongwa'
        ]);
        DB::table('places')->insert([
            'region' => 'Dodoma',
            'district' => 'Mpwapwa'
        ]);
        DB::table('places')->insert([
            'region' => 'Geita',
            'district' => 'Bukombe'
        ]);
        DB::table('places')->insert([
            'region' => 'Geita',
            'district' => 'Chato'
        ]);
        DB::table('places')->insert([
            'region' => 'Geita',
            'district' => 'Geita Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Geita',
            'district' => 'Mbogwe'
        ]);
        DB::table('places')->insert([
            'region' => 'Geita',
            'district' => "Nyang'hwale"
        ]);
        DB::table('places')->insert([
            'region' => 'Iringa',
            'district' => 'Iringa Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Iringa',
            'district' => 'Iringa Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Iringa',
            'district' => 'Kilolo'
        ]);
        DB::table('places')->insert([
            'region' => 'Iringa',
            'district' => 'Mafinga'
        ]);
        DB::table('places')->insert([
            'region' => 'Iringa',
            'district' => 'Mufindi'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Biharamulo'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Bukoba Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Bukoba Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Karagwe'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Kyerwa'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Missenyi'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Muleba'
        ]);
        DB::table('places')->insert([
            'region' => 'Kagera',
            'district' => 'Ngara'
        ]);
        DB::table('places')->insert([
            'region' => 'Kaskazini Pemba',
            'district' => 'Micheweni'
        ]);
        DB::table('places')->insert([
            'region' => 'Kaskazini Pemba',
            'district' => 'Wete'
        ]);
        DB::table('places')->insert([
            'region' => 'Kaskazini Unguja',
            'district' => 'Kaskazini A'
        ]);
        DB::table('places')->insert([
            'region' => 'Kaskazini Unguja',
            'district' => 'Kaskazini B'
        ]);
        DB::table('places')->insert([
            'region' => 'Katavi',
            'district' => 'Mlele'
        ]);
        DB::table('places')->insert([
            'region' => 'Katavi',
            'district' => 'Mpanda Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Katavi',
            'district' => 'Mpanda Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Buhigwe'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kakonko'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kasulu Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kasulu Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kibondo'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Uvinza'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kigoma'
        ]);
        DB::table('places')->insert([
            'region' => 'Kigoma',
            'district' => 'Kigoma-Ujiji'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Hai'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Moshi Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Moshi Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Mwanga'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Rombo'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Same'
        ]);
        DB::table('places')->insert([
            'region' => 'Kilimanjaro',
            'district' => 'Siha'
        ]);
        DB::table('places')->insert([
            'region' => 'Kusini Pemba',
            'district' => 'Chake Chake'
        ]);
        DB::table('places')->insert([
            'region' => 'Kusini Pemba',
            'district' => 'Mkoani'
        ]);
        DB::table('places')->insert([
            'region' => 'Kusini Unguja',
            'district' => 'Kati'
        ]);
        DB::table('places')->insert([
            'region' => 'Kusini Unguja',
            'district' => 'Kusini'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Kilwa'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Lindi Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Lindi Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Liwale'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Nachingwea'
        ]);
        DB::table('places')->insert([
            'region' => 'Lindi',
            'district' => 'Ruangwa'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Babati Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Babati Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Hanang'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Kiteto'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Mbulu'
        ]);
        DB::table('places')->insert([
            'region' => 'Manyara',
            'district' => 'Simanjiro'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Bunda'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Butiama'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Musoma Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Musoma Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Rorya'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Serengeti'
        ]);
        DB::table('places')->insert([
            'region' => 'Mara',
            'district' => 'Tarime'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Busokelo'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Chunya'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Kyela'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Mbarali'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Mbeya Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Mbeya Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mbeya',
            'district' => 'Rungwe'
        ]);
        DB::table('places')->insert([
            'region' => 'Mjini Magharibi',
            'district' => 'Magharibi'
        ]);
        DB::table('places')->insert([
            'region' => 'Mjini Magharibi',
            'district' => 'Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Gairo'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Kilombero'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Kilosa'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Morogoro Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Morogoro Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Mvomero'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Ulanga'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Malinyi'
        ]);
        DB::table('places')->insert([
            'region' => 'Morogoro',
            'district' => 'Ifakara'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Masasi Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Masasi Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Mtwara Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Mtwara Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Nanyumbu'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Newala'
        ]);
        DB::table('places')->insert([
            'region' => 'Mtwara',
            'district' => 'Tandahimba'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Ilemela'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Kwimba'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Magu'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Misungwi'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Nyamagana'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Sengerema'
        ]);
        DB::table('places')->insert([
            'region' => 'Mwanza',
            'district' => 'Ukerewe'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => 'Ludewa'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => 'Makambako'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => 'Makete'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => 'Njombe Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => 'Njombe Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Njombe',
            'district' => "Wanging'ombe"
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Bagamoyo'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Kibaha Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Kibaha Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Kisarawe'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Mafia'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Mkuranga'
        ]);
        DB::table('places')->insert([
            'region' => 'Pwani',
            'district' => 'Rufiji'
        ]);
        DB::table('places')->insert([
            'region' => 'Rukwa',
            'district' => 'Kalambo'
        ]);
        DB::table('places')->insert([
            'region' => 'Rukwa',
            'district' => 'Nkasi'
        ]);
        DB::table('places')->insert([
            'region' => 'Rukwa',
            'district' => 'Sumbawanga Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Rukwa',
            'district' => 'Sumbawanga Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Mbinga'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Songea Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Songea Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Tunduru'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Namtumbo'
        ]);
        DB::table('places')->insert([
            'region' => 'Ruvuma',
            'district' => 'Nyasa'
        ]);
        DB::table('places')->insert([
            'region' => 'Shinyanga',
            'district' => 'Kahama Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Shinyanga',
            'district' => 'Kahama Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Shinyanga',
            'district' => 'Kishapu'
        ]);
        DB::table('places')->insert([
            'region' => 'Shinyanga',
            'district' => 'Shinyanga Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Shinyanga',
            'district' => 'Shinyanga Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Simiyu',
            'district' => 'Bariadi'
        ]);
        DB::table('places')->insert([
            'region' => 'Simiyu',
            'district' => 'Busega'
        ]);
        DB::table('places')->insert([
            'region' => 'Simiyu',
            'district' => 'Itilima'
        ]);
        DB::table('places')->insert([
            'region' => 'Simiyu',
            'district' => 'Maswa'
        ]);
        DB::table('places')->insert([
            'region' => 'Simiyu',
            'district' => 'Meatu'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'Ikungi'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'Iramba'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'Manyoni'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'Mkalama'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'Singida Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Singida',
            'district' => 'SIngida Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Songwe',
            'district' => 'Ileje'
        ]);
        DB::table('places')->insert([
            'region' => 'Songwe',
            'district' => 'Mbozi'
        ]);
        DB::table('places')->insert([
            'region' => 'Songwe',
            'district' => 'Momba'
        ]);
        DB::table('places')->insert([
            'region' => 'Songwe',
            'district' => 'Songwe'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Igunga'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Kaliua'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Nzege'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Sikonge'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Tabora Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Urambo'
        ]);
        DB::table('places')->insert([
            'region' => 'Tabora',
            'district' => 'Uyui'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Handeni Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Handeni Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Kilindi'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Korogwe Mjini'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Korogwe Vijijini'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Lushoto'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Muheza'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Mkinga'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Pangani'
        ]);
        DB::table('places')->insert([
            'region' => 'Tanga',
            'district' => 'Tanga Mjini'
        ]);
    }
}
