<?php
namespace App\Library;
use App\Affiliateusers;

class GlobalVariable
{
    

    static public function get_global_variable()
    {
        return (object) [
            'header_table_body' => self::header_table_body(),
            'header_table_body2'   => self::header_table_body2(),
            'footer_table_body'   => self::footer_table_body(),
        ];
    }

    static public function header_table_body()
    {
        $table_body = [];

       

        $table_body2 = [];
        $table_body2[] = 'TOP';
        $table_body2[] = route('top');
        $table_body2[] = "2";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = '新規口座開設';
        $table_body2[] = route('individual');
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'デモ口座開設';
        $table_body2[] = route('demo');
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'GOOD ENOUGH FX 案内';
        $table_body2[] = route('top')."#annai";
        $table_body2[] = "4";
        $table_body[] = $table_body2;
        
        

        return $table_body;
    }

    static public function header_table_body2()
    {
        $table_body = [];
        
        $table_body2 = [];
        $table_body2[] = 'お知らせ';
        $table_body2[] = route('top')."#osirase";
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'よくある質問';
        $table_body2[] = route('faq');
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'ログイン';
        $table_body2[] = route('mt4login');
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'ログアウト';
        $table_body2[] = route('mt4logout');
        $table_body2[] = "3";
        $table_body[] = $table_body2;
        
        

        return $table_body;
    }



    static private function footer_table_body()
    {
        $table_body = [];
        
        $table_body2 = [];
        $table_body2[] = '金融サービスガイド(FSG)';
        $table_body2[] = asset('images/GEFX FSG.pdf');
        $table_body2[] = "2";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = '金融商品開示文書(PDS)';
        $table_body2[] = asset('images/GEFX PDS.pdf');
        $table_body2[] = "2";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = '取引規約';
        $table_body2[] = asset('images/GEFX Terms & conditions.pdf');
        $table_body2[] = "1";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'ウェブサイト個人情報保護方針';
        $table_body2[] = asset('images/GEFX WebsitePrivacyPolicy.pdf');
        $table_body2[] = "3";
        $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = 'ウェブサイト利用規約';
        $table_body2[] = asset('images/GEFX利用規約.pdf');
        $table_body2[] = "2";
        $table_body[] = $table_body2;

        // $table_body2 = [];
        // $table_body2[] = 'コンプライアンス';
        // $table_body2[] = route('top');
        // $table_body2[] = "1";
        // $table_body[] = $table_body2;

        $table_body2 = [];
        $table_body2[] = '会社概要';
        $table_body2[] = route('aboutcompany');
        $table_body2[] = "1";
        $table_body[] = $table_body2;
        
        

        return $table_body;
    }
}