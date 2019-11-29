<?php
require 'app/Mage.php';
Mage::app('admin')->setUseSessionInUrl(false);
//Enter the order numbers you wish to delete below
$teste_compra_ids=array(
 '100000088',
 '100000089',
 '100000090', 
 '100000091', 
 '100000092', 
 '100000093', 
 '100000094', 
 '100000095', 
 '100000096', 
 '100000097', 
 
);
foreach($teste_compra_ids as $id){
 try{
 Mage::getModel('sales/order')->loadByIncrementId($id)->delete();
 echo "order ".$id." removed".PHP_EOL."<br>";
 }catch(Exception $e){
 echo "Unable to remove this #".$id." order ".$e->getMessage().PHP_EOL;
 }
}
echo "Successfully completed";

?>