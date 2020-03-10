<?php
$f = "/z01/github/minter-insurance-bin/address_info.json";
$a = file_get_contents($f);
$set[address_info] = json_decode($a,1);

?>
<html>

<head>
    <title>Minter Insurance v2.0</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="Create a cryptocurrency of your own. All information about the Minter network in one place.">
    <meta data-n-head="ssr" data-hid="og-title" name="og:title" content="We Mint Coins">
    <meta data-n-head="ssr" data-hid="og-description" name="og:description" content="Create a cryptocurrency of your own. All information about the Minter network in one place.">
    <meta data-n-head="ssr" data-hid="og-image" name="og:image" content="/social-share.png?v2">
    <link data-n-head="ssr" rel="icon" href="/favicon.png">
    <link data-n-head="ssr" rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
$f = __DIR__."/03.css";
$a = filemtime($f);
print "<link rel=\"stylesheet\" href=\"03.css?$a\">";
?>
</head>

<body>
        <!---->
        <div id="__layout">
            <div class="main-wrap">
                <div class="u-container index-section main-content">
                    <section class="index-intro u-h2">
		<B>Minter</B>
			<img src="/img/minter-logo-circle.svg" alt="Minter" width="33" height="33" class="index-intro__logo"> <B class="text-nowrap">INSURANCE&nbsp;v2.0</B> <span class=minter_color>(alpha)</span>
		    </section>
<h1 class="index-intro__title u-h2">
Service for Delegators
</h1>
<p class="index-feature__description">
MINTER INSURANCE COIN - <b class=minter_color>MINS</b>
<br>
<br>
TIME OF CREATION - <b>03/2020</b>
<br>
<?php
$t = $set[address_info][validator][all];
$t /= 1000000000;
$t = round($t,3);
$total_stake = $t;

print "START-UP CAPITAL - <b>1% FROM ALL STAKE  APPROX <span class=minter_color>".$t." Billion</span> BIP</b>";
?>

<br>
<br>
Сreation TEAM
<br>
<a target=p class="team_link link--default" href=https://ex.minter.su>Ex.minter.su</a> and <a target=p class="team_link link--default" href=https://pro-blockchain.com>Pro-Blockchain.com</a>
</p>
<!-- <a href="https://about.minter.network/" class="index-intro__button button button--main">Start Now</a>-->


<!-- ----------------------------------- -->
<?php

$f = "/z01/github/minter-insurance-bin/address_info.json";
$a = file_get_contents($f);
$b = json_decode($a,1);


$f = "/z01/github/minter-insurance-bin/minter-insurance-reward-calc.php.json";
$a = file_get_contents($f);
$a = json_decode($a,1);

$wal = $_GET[address];
?>
  <!-- Another variation with a button -->

  <form class="input-group" style="margin:20px 0 20px;">
    <input type="text" name=address style="" class="form-control" placeholder="Enter Mx address" value="<?php print $wal;?>">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>

    </div>
  </form>
<?php


if($wal)
{
	$c[1] = $a[RewardEvent][addr][$wal];
	$c[2] = $set[address_info][address][$wal][all];
	$c[3] = count($set[address_info][address][$wal][validators]);
	print "<div style=\"margin:20px 0 0 60px;\">";
	print "<table class=\"table table-borderless\">";
	print "<tr>";
		print "<td class=\"text-right\"> BIP - Reward on block [$a[blk]]</td>";
		print "<td class=minter_color>";
		$v = $c[1];
		$v = round($v,2);
		print "~ $v BIP";
		print "</td>";

	print "</tr>";
	print "<tr>";
		print "<td class=\"text-right\">Total Stake</td>";
		print "<td class=minter_color>";
		$v = $c[2];
		$v = round($v,2);
		print "~ $v BIP";
		print "</td>";

	print "</tr>";
	print "<tr>";
		print "<td class=\"text-right\">Validators</td>";
		print "<td class=minter_color>";
		$v = $c[3];
		//$v = round($v,2);
		print "$v";
		print "</td>";

	print "</tr>";

	print "</tr>";
	print "<tr>";
		print "<td class=\"text-right minter_color\">MINS recommended on</td>";
		print "<td class=minter_color>";
		$v = $c[2]/100;
		$v = ceil($v);
		print "<b>$v</b> BIP";
		print "</td>";

	print "</tr>";



//	print "<tr><td class=minter_color>$c[2]</td><td> Total Stake</td></tr>";
//	print "<tr><td class=minter_color>".$c[3]."</td><td> Validators</td></tr>";
	print "</table>";
	print "</div>";
	
//print "=====================================================\n";
        print "<hr class=\"hr--divider\">";
}
?>










                    <div class="u-grid u-grid--large u-grid--vertical-margin--large">
                        <div class="u-cell u-cell--medium--1-2">
<!-- <img src="/img/feature-tools.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">-->
<img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">COIN INFO</h2>
                            <p class="index-feature__description">

<?php
print "
TICKER - MINS
<br>
CRR -18%
<br>
";
$t = $total_stake*10;
print "BIP in IE (initial emission) - ".($t)." Million BIP";
print "
<br>
";
$t2 = $t/0.18;
$t2 = ceil($t2);
$t3 = $t2/2;
print "Coins in start $t2 Million  MINS";
print "
<br>
$t3 million - return to MINTER DAO
<br>
$t3 millon - delegated to top-30 validators
<br>
OFFICIAL SITE: <a class=\"minter_color font-weight-bold link--default text-uppercase\" href=https://ins.minter.su>ins.minter.su</a>
";
?>

                            </p>
                        </div>


<!-- ----------------------------------- -->


                        <div class="u-cell u-cell--medium--1-2">
<!-- <img src="/img/feature-tools.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">-->
<img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">
INSURANCE FUND
</h2>
                            <p class="index-feature__description  text-justifY">

Accumulation period - up to 1 year. The amount of 1% of the total amount in delegation. 
After one year - Maintaining 1% of the reserve on the total steak amount is independent of the insurance amount, technical support for validators

                            </p>
                        </div>

<!-- ----------------------------------- -->


                        <div class="u-cell u-cell--medium--1-2">
<!-- <img src="/img/feature-tools.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">-->
<img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">
INSURANCE DAO
</h2>
                            <p class="index-feature__description">

Team of design, organization of work and strategic planning. 

<br>
<br>
10% - INSURANCE DAO
<br>
10% - SUPPORT AND DEVELOP
<br>
80% - INSURANCE FUND

                            </p>
                        </div>

<!-- ----------------------------------- -->

                       <div class="u-cell u-cell--medium--1-2"><img src="/img/feature-open.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">Open &amp; Free Code</h2>
                            <p class="index-feature__description">Everything is crowdsourced and published in&nbsp;<a href="https://github.com/pro-blockchain-com?q=INSURANCE" target="_blank" rel="nofollow" class="link--default">GitHub</a> with open licenses.</p>
                        </div>
 
<!-- ----------------------------------- -->

                        <div class="u-cell u-cell--medium--1-2">
<!-- <img src="/img/feature-tools.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">-->
<img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">
HOW IT WORK
</h2>
                            <p class="index-feature__description text-justifY">

- for insurance you need to buy mins or poison the equivalent to a dedicated address
<BR>
- at this address you can always see the insured amount on the official website of the project
<BR>
- also at any time you can request a withdrawal, payment is made within 24 hours, after requesting a withdrawal - the withdrawal amount does not participate in stake insurance
<BR>
- in case of an insured event - payment shall be made within 24 hours
<BR>
- also on the official website you can view the general network steak, the general steak of any delegator in any validator
<BR>
- in the telegram channel you can receive daily information about the status of the network
<BR>
- in the telegram bot, you can configure notifications by the status of changes of any parameters, and / or daily notifications
                            </p>
                        </div>

<!-- ----------------------------------- -->

                        <div class="u-cell u-cell--medium--1-2">
<!-- <img src="/img/feature-tools.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">-->
<img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                            <h2 class="index-feature__title u-h3">
TEAM CHANGE CONDITIONS
</h2>
                            <p class="index-feature__description text-justifY">

- search for a new team to support the project, transfer of software products and seeds from official seeds
<BR>
- closing of the project and payment-return of the insured amounts
<BR>

                            </p>
                        </div>

                    </div>
<!--
                    <hr class="hr--divider">
                    <div><img src="/img/feature-community.svg" width="48" height="48" alt="" role="presentation" class="index-feature__icon">
                        <h2 class="index-feature__title u-h3">Helpful Community</h2>
                        <p class="index-feature__description">
                            Subscribe to <a href="tg://resolve?domain=MinterTeam" target="_blank" rel="nofollow" class="link--default">Telegram</a>,
                            <a href="https://medium.com/@MinterTeam" target="_blank" rel="nofollow" class="link--default">Medium</a>,
                            <a href="https://twitter.com/MinterTeam" target="_blank" rel="nofollow" class="link--default">Twitter</a>,
                            <a href="https://www.facebook.com/MinterNetwork" target="_blank" rel="nofollow" class="link--default">Facebook</a> <br class="u-hidden-medium-down">
                            or join the conversation in <a href="tg://join?invite=EafyERJSJZJ-nwH_139jLQ" target="_blank" rel="nofollow" class="link--default">Telegram</a>
                            and&nbsp;<a href="https://www.reddit.com/r/Minter/" target="_blank" rel="nofollow" class="link--default">Reddit</a></p>
                    </div>
-->
                </div>


<?php


include "footer.php";
?>
            </div>
        </div>
</body>

</html>

