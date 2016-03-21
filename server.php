<?php
/**
 * From react Tutorial
 * This file provided by Facebook is for non-commercial testing and evaluation
 * purposes only. Facebook reserves all rights not expressly granted.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * FACEBOOK BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
$scriptInvokedFromCli =
    isset($_SERVER['argv'][0]) && $_SERVER['argv'][0] === 'server.php';
if($scriptInvokedFromCli) {
    $port = getenv('PORT');
    if (empty($port)) {
        $port = "3000";
    }
    echo 'starting server on port '. $port . PHP_EOL;
    exec('php -S localhost:'. $port . ' -t . server.php');
} else {
    return routeRequest();
}
function routeRequest()
{
    header("Content-Type: text/html");
    header("Cache: hogehoge");
    header('Access-Control-Allow-Origin:*');
    $uri = $_SERVER['REQUEST_URI'];
    if ($uri == '/') {
        echo "/";
    } elseif (preg_match('/\/items/', $uri)) {
        echo "<html><body><p>items</p></body></html>";
    } else {
        return false;
    }
}