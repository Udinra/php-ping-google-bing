/*************************************************************************************************************************/
/*                                                  PING GOOGLE                                                          */
/*************************************************************************************************************************/
//We will dynamically create Search Engine URL
$ping_url = '';
$sitemap_url = 'link of your sitemap file';
//Create Ping URL with your Sitemap URL
$ping_url = "http://www.google.com/webmasters/tools/ping?sitemap=" . urlencode($sitemap_url);
//capture response of Google.
//wp_remote_get is WordPress specific function.Users of other content management system can use similar function
$search_response = wp_remote_get( $ping_url );
//check the ping status
if($Search_response['response']['code']=200)
{
  echo "Pinged Google Successfully";
}
else 
{
  echo "Failed to ping Google.";
}
/*************************************************************************************************************************/
/*                                                  PING BING                                                            */
/*************************************************************************************************************************/
//We will dynamically create Search Engine URL
$ping_url = '';
$sitemap_url = 'link of your sitemap file';
//Create Ping URL with your Sitemap URL
$ping_url = "http://www.bing.com/webmaster/ping.aspx?sitemap=" . urlencode($sitemap_url);
//capture response of Google.
//wp_remote_get is WordPress specific function.Users of other content management system can use similar function
$search_response = wp_remote_get( $ping_url );
//check the ping status
if($Search_response['response']['code']=200)
{
  echo "Pinged Google Successfully";
}
else 
{
  echo "Failed to ping Google.";
}
