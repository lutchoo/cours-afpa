<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER nbpieces1" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" epaisseurPoint="2" totalBoucles="5000000" arrondiAuto="vrai" maxBoucle="500000" nbDecimales="8" totalAffichages="1000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="montant_total EST_DU_TYPE NOMBRE" code="1#NOMBRE#montant_total"/>
        <item algoitem="paiement EST_DU_TYPE NOMBRE" code="1#NOMBRE#paiement"/>
        <item algoitem="rendu EST_DU_TYPE NOMBRE" code="1#NOMBRE#rendu"/>
        <item algoitem="nbbillets10 EST_DU_TYPE NOMBRE" code="1#NOMBRE#nbbillets10"/>
        <item algoitem="nbpieces1 EST_DU_TYPE NOMBRE" code="1#NOMBRE#nbpieces1"/>
        <item algoitem="nbbillets5 EST_DU_TYPE NOMBRE" code="1#NOMBRE#nbbillets5"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE montant_total" code="2#montant_total#pasliste"/>
        <item algoitem="LIRE paiement" code="2#paiement#pasliste"/>
        <item algoitem="rendu PREND_LA_VALEUR paiement-montant_total" code="5#rendu#paiement-montant_total#pasliste"/>
        <item algoitem="AFFICHER rendu" code="3#rendu#1#pasliste"/>
        <item algoitem="TANT_QUE (rendu>0) FAIRE" code="15#rendu>0">
            <item algoitem="DEBUT_TANT_QUE" code="16#debuttantque"/>
            <item algoitem="SI (rendu>=10) ALORS" code="6#rendu>=10">
                <item algoitem="DEBUT_SI" code="7#debutsi"/>
                <item algoitem="nbbillets10 PREND_LA_VALEUR nbbillets10+1" code="5#nbbillets10#nbbillets10+1#pasliste"/>
                <item algoitem="rendu PREND_LA_VALEUR rendu-10" code="5#rendu#rendu-10#pasliste"/>
                <item algoitem="FIN_SI" code="8#finsi"/>
                <item algoitem="SINON" code="9#sinon">
                    <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                    <item algoitem="SI (rendu>=5) ALORS" code="6#rendu>=5">
                        <item algoitem="DEBUT_SI" code="7#debutsi"/>
                        <item algoitem="nbbillets5 PREND_LA_VALEUR nbbillets5+1" code="5#nbbillets5#nbbillets5+1#pasliste"/>
                        <item algoitem="rendu PREND_LA_VALEUR rendu-5" code="5#rendu#rendu-5#pasliste"/>
                        <item algoitem="FIN_SI" code="8#finsi"/>
                        <item algoitem="SINON" code="9#sinon">
                            <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                            <item algoitem="nbpieces1 PREND_LA_VALEUR rendu" code="5#nbpieces1#rendu#pasliste"/>
                            <item algoitem="rendu PREND_LA_VALEUR 0" code="5#rendu#0#pasliste"/>
                            <item algoitem="FIN_SINON" code="11#finsinon"/>
                        </item>
                    </item>
                    <item algoitem="FIN_SINON" code="11#finsinon"/>
                </item>
            </item>
            <item algoitem="FIN_TANT_QUE" code="17#fintantque"/>
        </item>
        <item algoitem="AFFICHER nbbillets10" code="3#nbbillets10#1#pasliste"/>
        <item algoitem="AFFICHER nbbillets5" code="3#nbbillets5#1#pasliste"/>
        <item algoitem="AFFICHER nbpieces1" code="3#nbpieces1#1#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
