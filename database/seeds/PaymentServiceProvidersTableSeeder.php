<?php

use Illuminate\Database\Seeder;

class PaymentServiceProvidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_service_providers')->delete();
        
        \DB::table('payment_service_providers')->insert(array (
            0 => 
            array (
                'id' => 3,
                'payment_service_provider_category_id' => 2,
                'name_ar' => 'اتصالات',
                'name_en' => 'Etisalat Bills',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/etisalat.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'payment_service_provider_category_id' => 2,
                'name_ar' => 'أورنج',
                'name_en' => 'Orange Bills',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/orange.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 581,
                'payment_service_provider_category_id' => 2,
                'name_ar' => 'فودافون',
                'name_en' => 'Vodafone Bills',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/vodafone.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1911,
                'payment_service_provider_category_id' => 41,
            'name_ar' => 'تحدى (نقاط)',
            'name_en' => 'Tahadi (Points)',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1912,
                'payment_service_provider_category_id' => 41,
                'name_ar' => 'سلك',
                'name_en' => 'Silk',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1917,
                'payment_service_provider_category_id' => 21,
                'name_ar' => 'كاش يو',
                'name_en' => 'CashU',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 4838,
                'payment_service_provider_category_id' => 3,
                'name_ar' => 'تى اى داتا',
                'name_en' => 'TE Data',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 4839,
                'payment_service_provider_category_id' => 3,
                'name_ar' => 'اتصالات DSL',
                'name_en' => 'Etisalat DSL',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/etisalat.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 4908,
                'payment_service_provider_category_id' => 62,
                'name_ar' => 'كروت فودافون',
                'name_en' => 'Vodafone Cards',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/vodafone.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 4974,
                'payment_service_provider_category_id' => 62,
                'name_ar' => 'كروت شحن اورنج',
                'name_en' => 'Orange EV',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/orange.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 4976,
                'payment_service_provider_category_id' => 62,
                'name_ar' => 'اتصالات',
                'name_en' => 'Etisalat EV',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/etisalat.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 7508,
                'payment_service_provider_category_id' => 41,
                'name_ar' => 'بلاى استيشن 3',
                'name_en' => 'Playstation 3',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 7509,
                'payment_service_provider_category_id' => 41,
                'name_ar' => 'اكس بوكس',
                'name_en' => 'XBOX',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 7510,
                'payment_service_provider_category_id' => 41,
                'name_ar' => 'زينجا',
                'name_en' => 'Zynga',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 7512,
                'payment_service_provider_category_id' => 21,
                'name_ar' => 'آى تيونز',
                'name_en' => 'iTunes',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 7702,
                'payment_service_provider_category_id' => 21,
                'name_ar' => 'Bee',
                'name_en' => 'Bee',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 8441,
                'payment_service_provider_category_id' => 141,
                'name_ar' => 'شركة جنوب القاهرة',
                'name_en' => 'South Cairo Electricity',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 8563,
                'payment_service_provider_category_id' => 101,
                'name_ar' => 'جامعة القاهرة',
                'name_en' => 'Cairo Universty',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 8564,
                'payment_service_provider_category_id' => 101,
                'name_ar' => 'جامعة عين شمس',
                'name_en' => 'Ain Shams Universty',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 8565,
                'payment_service_provider_category_id' => 101,
                'name_ar' => 'جامعة المنصورة',
                'name_en' => 'Mansoura Universty',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 8566,
                'payment_service_provider_category_id' => 101,
                'name_ar' => 'جامعة قناة السويس',
                'name_en' => 'Suez Canal Universty',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 10261,
                'payment_service_provider_category_id' => 261,
                'name_ar' => 'تحيا مصر',
                'name_en' => 'Tahya Misr',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 10321,
                'payment_service_provider_category_id' => 21,
                'name_ar' => 'provider10321',
                'name_en' => 'Damlag',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 10941,
                'payment_service_provider_category_id' => 261,
                'name_ar' => 'جمعية سرطان الثدى',
                'name_en' => 'Breast Cancer Foundation of Egypt',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => NULL,
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 11521,
                'payment_service_provider_category_id' => 341,
                'name_ar' => 'فودافون شحن رصيد',
                'name_en' => 'Vodafone Recharge',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/vodafone.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 11522,
                'payment_service_provider_category_id' => 341,
                'name_ar' => 'Etisalat Recharge',
                'name_en' => 'Etisalat Recharge',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/etisalat.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 11523,
                'payment_service_provider_category_id' => 341,
                'name_ar' => 'Orange',
                'name_en' => 'Orange Recharge',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/orange.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 12243,
                'payment_service_provider_category_id' => 341,
                'name_ar' => 'TE GSM',
                'name_en' => 'TE GSM',
                'description_ar' => NULL,
                'description_en' => NULL,
                'logo' => 'icons/we.png',
                'status' => 'active',
                'staff_id' => 1,
                'created_at' => '2020-02-16 23:44:47',
                'updated_at' => '2020-02-16 23:44:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}