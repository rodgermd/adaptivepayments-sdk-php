<?php
/**
 * Utility class for transforming PHP objects into
 * appropriate service payload type and vice versa
 */
class PPObjectTransformer {	
	
	public function toString($object) {
		
		if( $object == null ) {
			throw new PPTransformerException("Empty object");
		}
		
		$confManager = PPConfigManager::getInstance();
		switch($confManager->get("service.Binding")) {
			case 'soap':
			case 'xml':
			case 'json':
				return "";
			case 'nvp':
			default:
				return $object->toNVPString();
		}		
	}

	
}
?>
