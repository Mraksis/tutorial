<?php
AddEventHandler("main", "OnAfterUserRegister", Array("MyClass", "OnAfterUserRegisterHandler"));
class MyClass
{
   function OnafterUserRegisterHandler(&$arFields)
    {
        $userType = $arFields["UF_SIGN_TYPE"];
        if (!empty($userType)) {
            $groupId = $this->getGroupIdByUserType($userType);
            if ($groupId) {
                $this->addUserToGroup($arFields["ID"], $groupId);
            }
        }
    }

    function getGroupIdByUserType($userType)
    {
        if ($userType == "Selling") {
            return 9;
        } elseif ($userType == "Buying") {
            return 8;
        }
        return null;
    }

    function addUserToGroup($userId, $groupId)
    {
        global $USER;
        if (CModule::IncludeModule("main")) {
            $user = new CUser;
            $user->Update($userId, array("GROUPS" => array($groupId)));
            return true;
        }
        return false;
    }
}
?>