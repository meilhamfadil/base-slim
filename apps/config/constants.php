<?php defined('BASEPATH') or exit('No direct script access allowed');

defined("C1001") or define("C1001", 0);
defined("C1002") or define("C1002", 1002);
defined("C1003") or define("C1003", 1003);
defined("C1004") or define("C1004", 1004);
defined("C1005") or define("C1005", 1005);
defined("C1006") or define("C1006", 1006);
defined("C1007") or define("C1007", 1007);
defined("C1008") or define("C1008", 1008);
defined("C1009") or define("C1009", 1009);
defined("C1010") or define("C1010", 1010);
defined("C1011") or define("C1011", 1011);
defined("C1012") or define("C1012", 1012);
defined("C1013") or define("C1013", 1013);
defined("C1014") or define("C1014", 1014);
defined("C1015") or define("C1015", 1015);

defined("C2000") or define("C2000", 2000);
defined("C2001") or define("C2001", 2001);
defined("C2002") or define("C2002", 2002);
defined("C2003") or define("C2003", 2003);
defined("C2004") or define("C2004", 2004);
defined("C2005") or define("C2005", 2005);
defined("C2006") or define("C2006", 2006);
defined("C2007") or define("C2007", 2007);

defined("M1001") or define("M1001", "Success");
defined("M1002") or define("M1002", "Failed");
defined("M1003") or define("M1003", "Unauthorized");
defined("M1004") or define("M1004", "Document Not Found");
defined("M1005") or define("M1005", "Document Corrupt");
defined("M1006") or define("M1006", "Request Form Incomplete");
defined("M1007") or define("M1007", "Something Error on Our System");
defined("M1008") or define("M1008", "Access Temporary Closed");
defined("M1009") or define("M1009", "Deprecated");
defined("M1010") or define("M1010", "IP Unauthorized");
defined("M1011") or define("M1011", "ProductModel Unauthorized");
defined("M1012") or define("M1012", "Balance is not enough");
defined("M1013") or define("M1013", "Wrong environment");
defined("M1014") or define("M1014", "Transaction Error");
defined("M1015") or define("M1015", "Expired Request");

defined("M2000") or define("M2000", "Invalid Environtment");
defined("M2001") or define("M2001", "Payment Success");
defined("M2002") or define("M2002", "Payment Reference Not Valid");
defined("M2003") or define("M2003", "Unregistered Host");
defined("M2004") or define("M2004", "This ProductModel has Sub ProductModel");
defined("M2005") or define("M2005", "Unknown Reference");
defined("M2006") or define("M2006", "Insufficient Balance");
defined("M2007") or define("M2007", "Mismatch Amount");

defined("MESSAGE_ERROR_ON_SYSTEM") or define("MESSAGE_ERROR_ON_SYSTEM", array(
    "message" => "Please email us about this request",
    "email" => "h2h_helpdesk@chpn.co.id"
));

defined("ERROR_ON_SCALAR") or define("ERROR_ON_SCALAR", array(
    "scalar" => false
));

defined("LIBRARIES") or define("LIBRARIES", "Libraries");
defined("MODELS") or define("MODELS", "Models");
defined("MIDDLEWARE") or define("MIDDLEWARE", "Middleware");

defined("SUCCESS") or define("SUCCESS", "success");
defined("FAILURE") or define("FAILURE", "failure");
defined("NEXT") or define("NEXT", "next");
defined("OUTPUT") or define("OUTPUT", "output");
defined("SETTING") or define("SETTING", "settings");
defined("JWT") or define("JWT", "jwt");
defined("WHITELIST_ROUTES") or define("WHITELIST_ROUTES", "whitelist");
defined("SOURCEPATH") or define("SOURCEPATH", BASEPATH . "/sources");

// Usual Keyword
defined("TOKEN") or define("TOKEN", "HTTP_TOKEN");
defined("SIGNATURE") or define("SIGNATURE", "Signature");
defined("CREDENTIAL") or define("CREDENTIAL", "credential");
defined("PRODUCT") or define("PRODUCT", "product");
defined("MODE") or define("MODE", "mode");
defined("DEVELOPMENT") or define("DEVELOPMENT", "development");
defined("PRODUCTION") or define("PRODUCTION", "production");
defined("LIVE") or define("LIVE", "live");
defined("SANDBOX") or define("SANDBOX", "sandbox");
defined("IPADDRESS") or define("IPADDRESS", "ip_address");
defined("REMOTE_ADDR") or define("REMOTE_ADDR", "REMOTE_ADDR");
defined("PRODUCT_MODE") or define("PRODUCT_MODE", "product_mode");
defined("SINGLE") or define("SINGLE", "single");
defined("HASSUB") or define("HASSUB", "hassub");

// Mandatory Body Attribute
defined("PAYMENT_REFERENCE") or define("PAYMENT_REFERENCE", "payment_reference");
defined("CUSTOMER_NUMBER") or define("CUSTOMER_NUMBER", "customer_number");
defined("PRODUCT_CODE") or define("PRODUCT_CODE", "product_code");

// Request Method
defined("POST") or define("POST", "post");
defined("GET") or define("GET", "get");
defined("PUT") or define("PUT", "put");
defined("DELETE") or define("DELETE", "delete");

// Schema
defined("SCHEMA") or define("SCHEMA", "schema");
defined("FAKE") or define("FAKE", "fake");
defined("INQUIRY") or define("INQUIRY", "inquiry");
defined("PAYMENT") or define("PAYMENT", "payment");
