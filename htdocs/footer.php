                <footer class="footer">
                    <div class="footer__container u-container">

<?php
$f = "/z01/github/minter-insurance-bin/minter-insurance-reward-calc.php.json";
$a = file_get_contents($f);
$a = json_decode($a,1);

$k = "blk";
$mas[$k][name] = "on Block";
$mas[$k][val] = $a[blk];

$k = "wals";
$mas[$k][name] = "Reward Address";
$mas[$k][val] = $a[RewardEvent][wals];

$k = "all";
$mas[$k][name] = "Reward Amount";
$mas[$k][val] = floor($a[RewardEvent][all])." BIP";

$k = "delegators";
$mas[$k][name] = "Reward Delegators";
$mas[$k][val] = floor($a[RewardEvent][Delegator])." BIP";

$k = "validators";
$mas[$k][name] = "Reward Validators";
$mas[$k][val] = floor($a[RewardEvent][Validator])." BIP";


foreach($mas as $k=>$v)
{
print "<div class=\"footer__stats-item\">";
print "<div class=\"footer__stats-key\">$v[name]</div>";
print "<div class=\"footer__stats-value\">$v[val]</div>";
print "</div>";
}


/*
                        <div class="footer__stats-item">
                            <div class="footer__stats-key">Since</div>
                            <div class="footer__stats-value">May 15, 2019</div>
                        </div>
                        <div class="footer__stats-item">
                            <div class="footer__stats-key">Coins created</div>
                            <div class="footer__stats-value">1 180</div>
                        </div>
                        <div class="footer__stats-item">
                            <div class="footer__stats-key">Blocks</div>
                            <div class="footer__stats-value">4 993 655</div>
                        </div>
                        <div class="footer__stats-item">
                            <div class="footer__stats-key">Transactions</div>
                            <div class="footer__stats-value">5 397 717</div>
                        </div>
                        <div class="footer__stats-item">
                            <div class="footer__stats-key">BIPs mined</div>
                            <div class="footer__stats-value">1 803 039 395</div>
                        </div>
*/
?>
                    </div>
                </footer>
