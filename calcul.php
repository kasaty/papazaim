<div class="calculator-input">
                    <div class="calculator-inner">
                        <div class="range">
                            <div class="display-flex-jus src">
                                <span>Сумма</span>
                                <div class="display-range-inner" id="display-amount"></div>
                            </div>
                            <input type="range" min="1000" max="15000" step="500" value="7500" id="Rubli" oninput="fun()">
                                <datalist id="rangeList">
                                    <option value="0" label="0">
                                    <option value="7500" label="7500">
                                    <option value="15000" label="15000">
                                </datalist>
                            </input>
                            <div class="display-flex-jus rc">
                                <span>1000</span>
                                <span>7500</span>
                                <span>15000</span>
                            </div>
                        </div>
                        <div class="range">
                            <div class="display-flex-jus src">
                                <span>Срок</span>
                                <div class="display-range-inner" id="display-day"></div>
                            </div>
                            <input type="range" min="1" max="30" step="1" value="15" id="day" oninput="fun()">
                                <datalist id="rangeList">
                                    <option value="0" label="0">
                                    <option value="15" label="5">
                                    <option value="30" label="10">
                                </datalist>
                            </input>
                            <div class="display-flex-jus rc">
                                <span>5 Дней</span>
                                <span>30 Дней</span>
                            </div>
                        </div>
                        <div>
                            <div class="input-text display-flex-jus">Сумма займа:<span id="sum_zaim"></span></div>
                            <div class="input-text display-flex-jus">Срок займа до:<span id="day_end"></span></div>
                            <div class="input-text display-flex-jus">Сумма к возврату:<span id="send_result"></span></div>
                        </div>
                        <?php
if(!isset($_SESSION['Login'])) {?>
<a href="login.php" style="text-align: center;"><button class="get-money">Получить деньги</button></a>
<?php } else {?>
<a href="anket.php" style="text-align: center;"><button class="get-money">Получить деньги</button></a>
<?php }
?>

</div>