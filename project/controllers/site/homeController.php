<?php


class HomeController extends Controller {


    public function index()
    {
        $url = '';
        if (isset($_GET['url']))
            $url = $_GET['url'];

        $image = '';
        $title = '';

        if ($curl = curl_init()) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36",
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    // Set here requred headers
                    "accept: /",
                    "accept-language: en-US,en;q=0.8",
                    "content-type: application/json",
                ),
            ));
            $content = curl_exec($curl);
            $html = str_replace(array("\n","\t","\t", "  "),'',$content);

            $str = '<meta property="og:image" content="(.*?)"';
            preg_match_all('/'.$str.'/', $html, $image);
            $image = $image[1][0];
            $str = '<meta property="og:title" content="(.*?)"';
            preg_match_all('/'.$str.'/', $html, $title);
            $title = $title[1][0];
        }
        return $this->view('index', ['image'=>$image, 'title'=> $title], 'site');
    }
}