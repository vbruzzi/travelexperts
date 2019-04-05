<?php
    # GET FUNCTIONS 
    function getFeatures(){ 
        return
        "SELECT PkgName, PkgBasePrice, PackageId
        FROM packages
        WHERE Featured=1";
    }

    function getUsers() {
        return 
        "SELECT UserId, Username, FirstName, MiddleNameInitials, LastName, Address, City, Province, Country, Postal, Email, Phone, Role
        FROM users
        ORDER BY FirstName";
    }

    function getPositions(){ 
        return
        "SELECT *
        FROM POSITIONS";
    }

    function getLocations(){
        return
        "SELECT AgencyId, AgncyCity
        FROM agencies";
    }

    function getAgentInfo($agentId) {
        return 
        "SELECT Title, agencies.AgncyCity
        FROM positions
        INNER JOIN agents ON agents.AgtPosition = positions.PositionId
        INNER JOIN agencies ON agents.AgencyId = agencies.AgencyId
        WHERE UserId=".(int)$agentId."";
    }

    function packageFeature($id) {
        return
        "SELECT packageoptions.Feature
        FROM featuredpackages
        INNER JOIN packageoptions ON featuredpackages.Feature = packageoptions.OptionId
        WHERE PackageId=$id";
    }

    # UPDATE FUNCTIONS
    function changeUser($id, $role) {
        return 
        "UPDATE users
        SET role=$role
        WHERE UserId=$id";
    }

    function updateAgentLocation($id, $newLocation){
        return 
        "UPDATE agents
        SET AgencyId=$newLocation
        WHERE UserId=$id";
    }

    function updateAgentPosition($id, $newPosition) {
        return 
        "UPDATE agents
        SET AgtPosition=$newPosition
        WHERE UserId=$id";
    }


    # CREATE/DELETE functions
    function removeAgent($id) {
        return
        "DELETE FROM Agents
        WHERE userId=$id";
    }
    function insertAgent($id) {
        return 
        "INSERT INTO agents (UserId)
        VALUES ($id)";
    }




?>