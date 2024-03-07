<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2lignes="" F2defaut="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" epaisseurPoint="2" epaisseurLigne="2" nbDecimales="8" totalAffichages="1000" totalBoucles="5000000" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#LISTE#tab" algoitem="tab EST_DU_TYPE LISTE"/>
        <item code="1#NOMBRE#compteur" algoitem="compteur EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="12#compteur#0#9" algoitem="POUR compteur ALLANT_DE 0 A 9">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="2#tab#compteur" algoitem="LIRE tab[compteur]"/>
            <item code="103#commentaire" algoitem=""/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="12#compteur#0#9" algoitem="POUR compteur ALLANT_DE 0 A 9">
            <item code="13#debutpour" algoitem="DEBUT_POUR"/>
            <item code="3#tab#1#compteur" algoitem="AFFICHER tab[compteur]"/>
            <item code="14#finpour" algoitem="FIN_POUR"/>
        </item>
        <item code="103#commentaire" algoitem=""/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
