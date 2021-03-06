Model.Root={_Table}

=[core/class/Doc_Table]

_Table=<table rules='rows'>{tr25%-}{Heading._row}{-tr-}{Dividends._row}{-tr-}{LiquidationPreference._row}{-tr-}{Voting._row}{-tr-}{Protect._row}{-tr-}{OptionalConvert._row}{-tr-}{AntiDilute._row}{-tr-}{MandatoryConvert._row}{-tr-}{Pay2Play._row}{-tr-}{Redemption._row}{-tr}</table>


Heading._row=<center>CHARTER</center>


Major={m-}Major{-m}

Dividends._row=Dividends:{-td-}{Div.Alternative}
<hr>
Div.Alternative=<u>Choose one</u><ol><li>{Div.Alternative1}</li><li>{Div.Alternative2}</li><li>{Div.Alternative3}</li></ol>
  <hr>
Div.Alternative1=Dividends will be paid on the Series A Preferred on an as-converted basis when, as, and if paid on the Common Stock.
<hr>
Div.Alternative2=The Series A Preferred will carry an annual {Div.Cumulative.Preference.%} cumulative dividend {Div.OnLiquidation}.  For any other dividends or distributions, participation with Common Stock on an as-converted basis.
<hr>
Div.OnLiquidation=payable upon a liquidation or redemption
<hr>
Div.Alternative3=Non-cumulative dividends will be paid on the Series A Preferred in an amount equal to {Div.NonCumulative.Preference.$} per share of Series A Preferred when and if declared by the Board.

<hr>
LiquidationPreference._row=Liquidation Preference:{-td-}In the event of any liquidation, dissolution or winding up of the Company, the proceeds shall be paid as follows:</p><p>{Liq.Alternative}<p>A merger or consolidation (other than one in which stockholders of the Company own a majority by voting power of the outstanding shares of the surviving or acquiring corporation) and a sale, lease, transfer, exclusive license or other disposition of all or substantially all of the assets of the Company will be treated as a liquidation event (a "Deemed Liquidation Event"), thereby triggering payment of the liquidation preferences described above {Liq.Trigger.Except}.  {Liq.EscrowDoesNotAffect}
<hr>
Liq.EscrowDoesNotAffect=The Investors' entitlement to their liquidation preference shall not be abrogated or diminished in the event part of the consideration is subject to escrow in connection with a Deemed Liquidation Event.
<hr>
Liq.Alternative=<u>Choose one</u><ol><li>{Liq.Alternative1}</li><li>{Liq.Alternative2}</li><li>{Liq.Alternative3}</li></ol>
<hr>
Note=Liq.Alternative1=(non-participating Preferred Stock):
<hr>
Liq.Alternative1=First pay {priceMultiple} times the Original Purchase Price {Liq.plus} on each share of Series A Preferred (or, if greater, the amount that the Series A Preferred would receive on an as-converted basis).  The balance of any proceeds shall be distributed pro rata to holders of Common Stock.
<hr>
Liq.plus={Liq.plus.accrued} {Liq.plus.unpaid}

Liq.plus.accrued=plus accrued dividends

Liq.plus.unpaid=plus declared and unpaid dividends

Note=Liq.Alternative2=(full participating Preferred Stock)
<hr>
Liq.Alternative2=First pay {priceMultiple} times the Original Purchase Price {Liq.plus} on each share of Series A Preferred.  Thereafter, the Series A Preferred participates with the Common Stock pro rata on an as-converted basis.
<hr>
Note=Liq.Alternative3=(cap on Preferred Stock participation rights): 
<hr>
Liq.Alternative3=First pay {priceMultiple} times the Original Purchase Price {Liq.plus} on each share of Series A Preferred.  Thereafter, Series A Preferred participates with Common Stock pro rata on an as-converted basis until the holders of Series A Preferred receive an aggregate of {Liq.PriceMultiple} times the Original Purchase Price (including the amount paid pursuant to the preceding sentence).</p>
<hr>
Liq.Trigger.Except=unless the holders of {Liq.Trigger.Except.%} of the Series A Preferred elect otherwise


Voting._row=Voting Rights:{-td-}The Series A Preferred shall vote together with the Common Stock on an as-converted basis, and not as a separate class, except (i) {Vote.Ins1} the Series A Preferred as a class shall be entitled to elect {Vote.DirA.#} members of the Board (the "Series A Directors"), and (ii) as required by law.  The Company's Certificate of Incorporation will provide that the number of authorized shares of Common Stock may be increased or decreased with the approval of a majority of the Preferred and Common Stock, voting together as a single class, and without a separate class vote by the Common Stock.

Vote.Ins1=so long as {Vote.DirA.Threshold} shares of Series A Preferred are outstanding,

Protect.=[NVCA/TermSheet/Sec/Charter_Protect.md]

OptionalConvert._row=Optional Conversion:</td><td>The Series A Preferred initially converts 1:1 to Common Stock at any time at option of holder, subject to adjustments for stock dividends, splits, combinations and similar events and as described below under "Anti-dilution Provisions."

AntiDilute._row=Anti-dilution Provisions:</td><td>In the event that the Company issues additional securities at a purchase price less than the current Series A Preferred conversion price, such conversion price shall be adjusted in accordance with the following formula:<br> {AntiDilute.Math}

AntiDilute.Math=<u>Selection One:</u>:<ol><li>{AntiDilute.Math.Alt1}</li><li>{AntiDilute.Math.Alt2}</li><li>{AntiDilute.Math.Alt3}</li></ol>

Pick=one of these alternatives.  Do it by making AntiDilute.Math={AntiDilute.Math.Alt1} or {AntiDilute.Math.Alt2} or {AntiDilute.Math.Alt3}

AntiDilute.Math.Alt1="Typical" weighted average:<p>CP2 = CP1 * (A+B) / (A+C)</p><p> </p><p>CP2 =  Series A Conversion Price in effect immediately after new issue</p><p>CP1  =  Series A Conversion Price in effect immediately prior to new issue</p><p>A      =  Number of shares of Common Stock deemed to be outstanding immediately prior to new issue (includes all shares of outstanding common stock, all shares of outstanding preferred stock on an as-converted basis, and all outstanding options on an as-exercised basis; and does not include any convertible securities converting into this round of financing) </p><p>B      =  Aggregate consideration received by the Corporation with respect to the new issue divided by CP</p><p>C      =  Number of shares of stock issued in the subject transaction

AntiDilute.Math.Alt2=Full-ratchet - the conversion price will be reduced to the price at which the new shares are issued.

AntiDilute.Math.Alt3=No price-based anti-dilution protection.

AntiDilute.Except=The following issuances shall not trigger anti-dilution adjustment:  (i) securities issuable upon conversion of any of the Series A Preferred, or as a dividend or distribution on the Series A Preferred; (ii) securities issued upon the conversion of any debenture, warrant, option, or other convertible security; (iii) Common Stock issuable upon a stock split, stock dividend, or any subdivision of shares of Common Stock; and (iv) shares of Common Stock (or options to purchase such shares of Common Stock) issued or issuable to employees or directors of, or consultants to, the Company pursuant to any plan approved by the Company's Board of Directors {AntiDilute.Except.BDVote.Directors}.

AntiDilute.Except.BDVote=including at least {Charter.InsX} Series A Director(s)

MandatoryConvert._row=Mandatory Conversion:{-td-}Each share of Series A Preferred will automatically be converted into Common Stock at the then applicable conversion rate in the event of the closing of a {Mand.firm commitment} underwritten public offering with a price of {Mand.Multiple} times the Original Purchase Price (subject to adjustments for stock dividends, splits, combinations and similar events) and {MandatoryConvert.net/gross} proceeds to the Company of not less than {MandatoryConvert-QPO-Min-Proceeds-$} (a "QPO"), or (ii) upon the written consent of the holders of {MandatoryConvert.Consent-of-A-Holders.%} of the Series A Preferred.
<hr>

Pay2Play._row=Pay-to-Play:{-td-}{PtP.Unless} on any subsequent {PtP.down} round all {Major} Investors are required to purchase their pro rata share of the securities set aside by the Board for purchase by the {Major} Investors.  All shares of Series A Preferred of any {Major} Investor failing to do so will automatically {PtP.Fail}.

PtP.Fail={PtP.Fail.AntiDilute}, {PtP.Fail.FutureRound}, {PtP.Fail.Convert}
<hr>
PtP.down=down

PtP.Unless=Unless the holders of {PtP.Ins.%} of the Series A elect otherwise,

PtP.Fail.AntiDilute=lose anti-dilution rights

PtP.Fail.FutureRound=lose right to participate in future rounds

PtP.Fail.Convert=convert to Common Stock and lose the right to a Board seat if applicable

Redemption._row=Redemption Rights:{-td-}Unless prohibited by Delaware law governing distributions to stockholders, the Series A Preferred shall be redeemable at the option of holders of at least {Redemption.A.%} of the Series A Preferred commencing any time after {Redemption.Begin} at a price equal to the Original Purchase Price {Redemption.Dividends}.  Redemption shall occur in three equal annual portions.  Upon a redemption request from the holders of the required percentage of the Series A Preferred, all Series A Preferred shares shall be redeemed {Redemption.OptOut}.

Redemption.Dividends=plus all accrued but unpaid dividends

Redemption.OptOut=(except for any Series A holders who affirmatively opt-out)