<?

function AgentCheckActivity()
{
	
	
	if(CModule::IncludeModule("iblock"))
	{
        $arSelect = array('DATE_ACTIVE_TO');
        $arFilter = array('IBLOCK_ID' => 7, '<=DATE_ACTIVE_TO' => array(false, ConvertTimeStamp(false,'FULL')));
        $rsResCat = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
		$arItems = array();
		while($arItemCat = $rsResCat->GetNext())
		{
			$arItems[] = $arItemCat;
		}
	
		CEventLog::Add(array(
            'SEVERITY' => 'SECURITY',
            'AUDIT_TYPE_ID' => '<=DATE_ACTIVE_TO',
            'MODULE_ID' => 'iblock',
            'ITEM_ID' => '',
            'DESCRIPTION' => 'Проверка акций на активность. '.count($arItems).' Акций истекли.',
		));
	
		if(count($arItems) > 0)
		{
			$arFilter = Array(
					"GROUPS_ID" => Array(2)
			);
			$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $arFilter);
			$arEmail = array();
			while($arResUser = $rsUsers->GetNext())
			{
				$arEmail[] = $arResUser["EMAIL"];
			}

			if(count($arEmail) > 0)
			{
				$arEventFields = array(
						"TEXT" => 'Проверка акций на активность. '.count($arItems).' Акций истекли.',
						"EMAIL" => implode(", ", $arEmail),
				);
				CEvent::Send("DATE_ACTIVE", "s1", $arEventFields);
			}
		}
	}

	return "AgentCheckActivity();";
}
?>