<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Access-Control-Allow-Credentials: true');

$mac_list=$_GET["mac_list"];

$test_data=array(
            0=>array(
              'name'=>'device1',
              'ip'=>'10.10.1.1',
              'ssid'=>'S-S-I-D-1',
              'mac_address'=>'431f:021d:03ds:0x431:4321:0000', 
              'device_type'=>'VM_BOX',
              'time_zone'=>'New York',
            ),
            1=>array(
              'name'=>'device2',
              'ip'=>'10.10.1.2',
              'ssid'=>'S-S-I-D-2',
              'mac_address'=>'431f:021d:03ds:0x431:4321:0001', 
              'device_type'=>'VM_BOX',
              'time_zone'=>'Berlin',
            ),
            2=>array(
              'name'=>'device3',
              'ip'=>'10.10.1.3',
              'ssid'=>'S-S-I-D-3',
              'mac_address'=>'431f:021d:03ds:0x431:4321:0002', 
              'device_type'=>'LCD',
              'time_zone'=>'London',
            ),
        );

echo json_encode($test_data);
    
?>