<?php
// Set headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Include necessary files
require_once 'config/Database.php';
require_once 'models/User.php';
require_once 'models/Property.php';
require_once 'models/Booking.php';
require_once 'models/Review.php';
require_once 'models/Payment.php';
require_once 'controllers/UserController.php';
require_once 'controllers/PropertyController.php';
require_once 'controllers/BookingController.php';
//require_once 'controllers/ReviewController.php';
require_once 'controllers/PaymentController.php';

// Get database connection
$database = new Database();
$db = $database->getConnection();

// Get request method and URI
$request_method = $_SERVER["REQUEST_METHOD"];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

// API endpoint routing
$endpoint = $uri[4] ?? ''; // Assuming the API is under /api/v1/
$action=$_GET['action'];
// Implement proper routing logic here
switch($endpoint) {
    case 'users':
        $controller = new UserController($db);
        if($action=='login')
        {
            $username="vincent";
            $password="123456";
            $result=$controller->login($username,$password);
            if($result=="login successful"){
                echo json_encode(["message" => "login successful","success" => "true"]);
            }
            else{
                echo json_encode(["message" => $result,"success" => "false"]);
            }
        }
        else if($action=='register')
        {
            $username="vincent";
            $email="vincent@patahouse.com";
            $password="123456";
            $role="user";
            $result=$controller->register($username,$email,$password,$role);
            if($result==1){
                echo json_encode(["message" => "register successful","success" => "true"]);
            }
            else{
                echo json_encode(["message" => "register failed","success" => "false"]);
            }
        }
        // Handle user-related endpoints
        break;
    case 'properties':
        $controller = new PropertyController($db);
        if($action=="add")
        {
            $property_name="gibcon house";
            $location="Nakuru";
            $result=$controller->createProperty($property_name,$location);
            echo json_encode(["result"=>$result,"success"=>"true"]);
        }
        // Handle property-related endpoints
        break;
    // Add other endpoints...
    default:
        http_response_code(404);
        echo json_encode(["message" => "Not Found","uri"=>$uri[4],"action"=>$action]);
        break;
}
?>
