<?php

namespace AlexStack\LaravelCms;

use Illuminate\Database\Seeder;

class CmsSettingsTableSeeder extends Seeder
{
    private $config;
    private $table_name;
    public function __construct()
    {
        $this->config = include(base_path('config/laravel-cms.php'));
        $this->table_name = $this->config['table_name']['settings'];
    }
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table($this->table_name)->delete();

        \DB::table($this->table_name)->insert(array(
            0 =>
            array(
                'id' => 2,
                'param_name' => 'page_footer',
                'page_id' => NULL,
                'param_value' => '<div class="row justify-content-center">
<div class="col-md pt-5 pb-5 text-center bg-light footer">
<span class="small  text-secondary">Made with <i class="fas fa-heart"></i> by <a href="https://github.com/AlexStack/Laravel-CMS" target="_blank" class=" text-secondary">Laravel CMS</a> @ ' . date('Y') . '</span>
</div>
</div>',
                'input_attribute' => '{"rows":15,"required":"required"}',
                'abstract' => '',
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 980,
                'created_at' => '2019-08-30 10:56:52',
                'updated_at' => '2019-09-05 15:12:38',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 3,
                'param_name' => 'favicon_url',
                'page_id' => NULL,
                'param_value' => '/favicon.ico',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => '',
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 80,
                'created_at' => '2019-08-30 11:47:18',
                'updated_at' => '2019-09-11 11:31:52',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 6,
                'param_name' => 'page_top',
                'page_id' => NULL,
                'param_value' => '<div class="row justify-content-end">
<div class="col-md text-right text-secondary page_top">
<i class="fab fa-facebook-square mr-3"></i>
<i class="fab fa-twitter-square mr-3"></i>
<i class="fas fa-envelope mr-4"></i>
</div>
</div>',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 999,
                'created_at' => '2019-09-03 09:11:34',
                'updated_at' => '2019-09-11 11:31:43',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 7,
                'param_name' => 'top_logo',
                'page_id' => NULL,
                'param_value' => '/laravel-cms/frontend/images/top-logo.png',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 90,
                'created_at' => '2019-09-05 10:09:16',
                'updated_at' => '2019-09-05 14:35:23',
                'deleted_at' => NULL,
            ),
            4 =>
            array(
                'id' => 9,
                'param_name' => 'frontend_dir',
                'page_id' => NULL,
                'param_value' => 'frontend',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'template',
                'enabled' => 1,
                'sort_value' => 66,
                'created_at' => '2019-09-05 13:37:01',
                'updated_at' => '2019-09-09 13:34:03',
                'deleted_at' => NULL,
            ),
            5 =>
            array(
                'id' => 10,
                'param_name' => 'backend_dir',
                'page_id' => NULL,
                'param_value' => 'backend',
                'input_attribute' => NULL,
                'abstract' => NULL,
                'category' => 'template',
                'enabled' => 1,
                'sort_value' => NULL,
                'created_at' => '2019-09-05 13:37:20',
                'updated_at' => '2019-09-09 13:34:24',
                'deleted_at' => NULL,
            ),
            6 =>
            array(
                'id' => 11,
                'param_name' => 'frontend_language',
                'page_id' => NULL,
                'param_value' => $this->config['template']['backend_language'],
                'input_attribute' => NULL,
                'abstract' => NULL,
                'category' => 'template',
                'enabled' => 1,
                'sort_value' => 60,
                'created_at' => '2019-09-05 13:37:41',
                'updated_at' => '2019-09-11 11:32:33',
                'deleted_at' => NULL,
            ),
            7 =>
            array(
                'id' => 12,
                'param_name' => 'slug_format',
                'page_id' => NULL,
                'param_value' => 'from_title',
                'input_attribute' => '{"select_options":{
"from_title":"Generate slug from page title",
"id":"Generate slug from page numeric id",
"pinyin":"Generate slug from page title and translate to Chinese PinYin"},
"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 45,
                'created_at' => '2019-09-05 13:41:53',
                'updated_at' => '2019-09-11 11:32:10',
                'deleted_at' => NULL,
            ),
            8 =>
            array(
                'id' => 13,
                'param_name' => 'slug_suffix',
                'page_id' => NULL,
                'param_value' => '.html',
                'input_attribute' => '{"select_options":{".html":"Set default page URL with .html suffix",
"":"Set default page URL without suffix", ".jsp":"Set default page URL with .jsp suffix",
".asp":"Set default page URL with .asp suffix", ".htm":"Set default page URL with .htm suffix"},
"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 42,
                'created_at' => '2019-09-05 13:42:14',
                'updated_at' => '2019-09-06 09:10:06',
                'deleted_at' => NULL,
            ),
            9 =>
            array(
                'id' => 14,
                'param_name' => 'slug_separate',
                'page_id' => NULL,
                'param_value' => '-',
                'input_attribute' => '{"select_options":{"-":"Separate words with symbol hyphen - for page URL",
"_":"Separate words with symbol underscore _ for page URL",
"":"Separate words without any symbol for page URL"},
"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 0,
                'sort_value' => 40,
                'created_at' => '2019-09-05 13:43:28',
                'updated_at' => '2019-09-05 16:52:28',
                'deleted_at' => NULL,
            ),
            10 =>
            array(
                'id' => 15,
                'param_name' => 'upload_dir',
                'page_id' => NULL,
                'param_value' => 'laravel-cms/uploads',
                'input_attribute' => '{
"rows":1,
"required":"required",
"pattern":"[a-zA-Z0-9\\\\-_/]{2,60}"
}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 0,
                'sort_value' => 50,
                'created_at' => '2019-09-05 13:51:25',
                'updated_at' => '2019-09-09 13:38:14',
                'deleted_at' => NULL,
            ),
            11 =>
            array(
                'id' => 16,
                'param_name' => 'image_encode',
                'page_id' => NULL,
                'param_value' => 'jpg',
                'input_attribute' => '{"select_options":{
"jpg":"Encode image with jpg format, smaller size",
"png":"Encode image with png format, better quality"},
"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 10,
                'created_at' => '2019-09-05 15:01:56',
                'updated_at' => '2019-09-09 13:22:20',
                'deleted_at' => NULL,
            ),
            12 =>
            array(
                'id' => 18,
                'param_name' => 'google_recaptcha_site_key',
                'page_id' => NULL,
                'param_value' => '',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 65,
                'created_at' => '2019-09-05 17:11:23',
                'updated_at' => '2019-09-05 17:11:23',
                'deleted_at' => NULL,
            ),
            13 =>
            array(
                'id' => 19,
                'param_name' => 'google_recaptcha_secret_key',
                'page_id' => NULL,
                'param_value' => '',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 64,
                'created_at' => '2019-09-05 17:11:57',
                'updated_at' => '2019-09-05 17:19:14',
                'deleted_at' => NULL,
            ),
            14 =>
            array(
                'id' => 21,
                'param_name' => 'page-tab-inquiry-form',
                'page_id' => NULL,
                'param_value' => '{
"blade_file" : "inquiry",
"tab_name" : "<i class=\'fas fa-edit mr-1\'></i>__(inquiry_form)",
"php_class"  : "AlexStack\\\\LaravelCms\\\\Helpers\\\\LaravelCmsPluginInquiry"
}',
                'input_attribute' => '{
"rows":11,
"required":"required"
}',
                'abstract' => NULL,
                'category' => 'plugin',
                'enabled' => 1,
                'sort_value' => 110,
                'created_at' => '2019-09-07 09:28:02',
                'updated_at' => '2019-09-11 11:33:01',
                'deleted_at' => NULL,
            ),
            15 =>
            array(
                'id' => 22,
                'param_name' => 'page-tab-preview',
                'page_id' => NULL,
                'param_value' => '{
"blade_file" : "preview",
"tab_name" : "<i class=\'fas fa-eye mr-1\'></i>__(preview)",
"php_class"  : ""
}',
                'input_attribute' => '{
"rows":11,
"required":"required"
}',
                'abstract' => NULL,
                'category' => 'plugin',
                'enabled' => 1,
                'sort_value' => 100,
                'created_at' => '2019-09-07 09:41:06',
                'updated_at' => '2019-09-09 20:18:27',
                'deleted_at' => NULL,
            ),
            16 =>
            array(
                'id' => 24,
                'param_name' => 'admin_setting_tabs',
                'page_id' => NULL,
                'param_value' => '{
"global" : "<i class=\'fas fa-cog mr-1\'></i>__(global,settings)",
"template" : "<i class=\'fas fa-globe mr-1\'></i>__(template)",
"plugin" : "<i class=\'fas fa-cogs mr-1\'></i>__(plugin)",
"file" : "<i class=\'fas fa-image mr-1\'></i>__(file)",
"category" : "<i class=\'fas fa-cubes mr-1\'></i>__(category)"
}',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract' => NULL,
                'category' => 'category',
                'enabled' => 1,
                'sort_value' => 98,
                'created_at' => '2019-09-07 14:53:34',
                'updated_at' => '2019-09-11 11:35:32',
                'deleted_at' => NULL,
            ),
            17 =>
            array(
                'id' => 26,
                'param_name' => 'big_image_width',
                'page_id' => NULL,
                'param_value' => '1000',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 110,
                'created_at' => '2019-09-08 11:40:37',
                'updated_at' => '2019-09-11 11:34:23',
                'deleted_at' => NULL,
            ),
            18 =>
            array(
                'id' => 27,
                'param_name' => 'small_image_width',
                'page_id' => NULL,
                'param_value' => '150',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 100,
                'created_at' => '2019-09-08 11:41:21',
                'updated_at' => '2019-09-11 11:34:45',
                'deleted_at' => NULL,
            ),
            19 =>
            array(
                'id' => 28,
                'param_name' => 'small_image_height',
                'page_id' => NULL,
                'param_value' => '100',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 90,
                'created_at' => '2019-09-08 11:57:59',
                'updated_at' => '2019-09-11 11:34:52',
                'deleted_at' => NULL,
            ),
            20 =>
            array(
                'id' => 29,
                'param_name' => 'middle_image_width',
                'page_id' => NULL,
                'param_value' => '300',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 109,
                'created_at' => '2019-09-08 12:10:19',
                'updated_at' => '2019-09-11 11:34:36',
                'deleted_at' => NULL,
            ),
            21 =>
            array(
                'id' => 30,
                'param_name' => 'middle_image_height',
                'page_id' => NULL,
                'param_value' => '200',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 108,
                'created_at' => '2019-09-08 12:10:37',
                'updated_at' => '2019-09-09 16:57:22',
                'deleted_at' => NULL,
            ),
            22 =>
            array(
                'id' => 31,
                'param_name' => 'admin_menu_links',
                'page_id' => NULL,
                'param_value' => '{
"dashboard" : {"style" : "dropdown",      "button" : "<a class=\'btn btn-success mr-3 dropdown-toggle\' href=\'ROUTE(LaravelCmsAdmin.index)\' role=\'button\'  data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'><i class=\'fas fa-home mr-1\'></i>__(dashboard)</a>",      "items" : [        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsAdmin.index)\' ><i class=\'fas fa-tachometer-alt mr-1 text-success\'></i>__(dashboard)</a>",        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsPages.index)\' target=\'_blank\'><i class=\'fas fa-eye mr-1 text-primary\'></i>__(preview,website)</a>",            "<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsPluginInquiry.index)\'><i class=\'fas fa-user-edit mr-1 text-info\'></i>__(all,inquiries)</a>",        	"<a class=\'dropdown-item\' href=\'ROUTE(LaravelCmsAdmin.show, \'logout\')\'><i class=\'fas fa-sign-out-alt mr-2 text-warning\'></i>__(logout)</a>"]},

"all_page" : "<a class=\'btn btn-primary mr-3\' href=\'ROUTE(LaravelCmsAdminPages.index)\' role=\'button\'><i class=\'fas fa-atlas mr-1\'></i>__(all_page)</a>",
"cms_settings" : "<a class=\'btn btn-secondary mr-3\' href=\'ROUTE(LaravelCmsAdminSettings.index)\' role=\'button\'><i class=\'fas fa-cog mr-1\'></i>CMS __(\'settings\') </a>",
"file_manager": "<a class=\'btn btn-info\' href=\'ROUTE(LaravelCmsAdminFiles.index)\' role=\'button\'><i class=\'fas fa-file-alt mr-1\'></i>__(file,manager)</a>"
}',
                'input_attribute' => '{"rows":11,"required":"required"}',
                'abstract' => NULL,
                'category' => 'category',
                'enabled' => 1,
                'sort_value' => 200,
                'created_at' => '2019-09-09 09:41:35',
                'updated_at' => '2019-09-09 12:46:43',
                'deleted_at' => NULL,
            ),
            23 =>
            array(
                'id' => 32,
                'param_name' => 'backend_language',
                'page_id' => NULL,
                'param_value' => $this->config['template']['backend_language'],
                'input_attribute' => NULL,
                'abstract' => NULL,
                'category' => 'template',
                'enabled' => 1,
                'sort_value' => 50,
                'created_at' => '2019-09-09 14:26:18',
                'updated_at' => '2019-09-11 11:32:27',
                'deleted_at' => NULL,
            ),
            24 =>
            array(
                'id' => 33,
                'param_name' => 'number_per_page',
                'page_id' => NULL,
                'param_value' => '16',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'file',
                'enabled' => 1,
                'sort_value' => 89,
                'created_at' => '2019-09-11 09:51:57',
                'updated_at' => '2019-09-11 10:02:16',
                'deleted_at' => NULL,
            ),
            25 =>
            array(
                'id' => 34,
                'param_name' => 'site_name',
                'page_id' => NULL,
                'param_value' => config('app.name'),
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => '',
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 8888,
                'created_at' => '2019-09-15 11:47:18',
                'updated_at' => '2019-09-16 11:31:52',
                'deleted_at' => NULL,
            ),
            26 =>
            array(
                'id' => 35,
                'param_name' => 'default_inquiry_form_setting_id',
                'page_id' => NULL,
                'param_value' => '1',
                'input_attribute' => '{"rows":1,"required":"required"}',
                'abstract' => NULL,
                'category' => 'global',
                'enabled' => 1,
                'sort_value' => 68,
                'created_at' => '2019-09-05 17:11:23',
                'updated_at' => '2019-09-05 17:11:23',
                'deleted_at' => NULL,
            ),
        ));
    }
}
