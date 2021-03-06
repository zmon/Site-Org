Note=State parameters

State=New York

State.LLCStatute=New York statute

Note=Body begins

Ti={Co.Name-Full} Operating Agreement

1.Ti=Name

1.sec=This operating agreement (this “{Agreement}”) is made by {Co.Name-Full} (the “{Company}”), a {State} limited liability company, and its sole member, {Member.Name-Full} (the “{Member}”).

2.Ti=Formation

2.sec=The {Company} has been formed under the {State.LLCStatute} authorizing the formation of limited liability companies. The purpose of the {Company} is stated in the articles of organization.

3.Ti=Offices

3.sec=The {Company} will have one or more offices at places the {Member} designates. The initial registered office of the {Company} is located at {Co.RegisteredOffice.Addr-1,2,3}.

4. Management

4.1.sec=The {Company} shall be managed by a Board of Directors appointed by the {Member}.  Each Director shall serve until resignation or removal. There shall be no more than {Director.Max#} Directors at any one time. All significant business decisions will require the majority approval (i.e. 51%) of the Board of Directors.  The Board of Directors is hereby appointed as follows, and each Director’s vote will be in proportion to the following percentages:<br>{Director.List.NameAndVoting%}

4.2.sec=No significant business decision requiring a vote of the Directors as set forth above shall be made without 100% of the Directors having cast a vote, which need not be made in person, in writing, or simultaneously with the other Directors, unless requested by the {Member}.

4.3.sec=The Board of Directors may delegate to another person the authority to perform specified acts on behalf of the {Company}.

4.4.sec=If the {Member} resigns, dies, is incapacitated, is unable to act, or is otherwise removed from his position by a majority vote of the Board of Directors, the percentages above will redistribute in equal percentage, and the {Company}’s full interest and membership will transfer to {Member.Successor.Name-Full}.

4.5.sec=If a Director resigns, dies, is incapacitated, is unable to act, or is otherwise removed from his or her position by a unanimous vote of the other Directors, the Board of Directors will meet to redistribute the percentages above and may, in its discretion, appoint a new Director to the Board of Directors. A new Director must be appointed by a unanimous vote of the remaining Directors.

4.6.sec=The Directors shall each perform the duties of a director of a national, professional organization.

4.=[Bit/Ssec_06]

Management.Xref={x-}Section 4{-x}

5.Ti=Capital Contributions

5.sec=The {Member} has contributed {Member.CapitalContribution$} to the {Company} in exchange for the {Member}s’ ownership interest in the {Company}. The {Member} will not be paid interest on this capital contribution, and the {Member} will have no further obligation to contribute money or property to the {Company}.

6.Ti=Taxes

6.sec=For federal tax purposes, the {Company} will be taxed as a sole proprietorship, with profits and losses passing through to the {Member}, solely for tax purposes.

7.Ti=Funds

7.sec=The {Member} will determine the financial institution that will hold {Company} funds and will determine the authorized signatures on {Company} accounts.

8.Ti=Additional {Members}

8.sec=The {Company} may admit one or more additional members upon such terms as are determined by the {Company} and the {Member}(s). If new members are admitted, the articles of organization and the operating agreement will be appropriately amended.

9.Ti=Limitations on Transfer/Right of First Refusal

9.1.sec=Except as set forth in this {Transfer.Xref} and {Term.AfterStopForBankBalance.Xref}, the {Member} shall not, for any reason, whether voluntarily, involuntarily or by operation of law, transfer all or any of the {Member}’s interest in the {Company} without a unanimous vote of the Board of Directors. Any such transfer not expressly permitted in this {Agreement} shall be null and void.

9.2.sec=The {Member}, upon receiving, or making, a bona fide offer from or to a third party to transfer all or a part of the {Member}’s interest in the {Company} (the “Offered Interests”), shall notify the Board of Directors in writing of the proposed transferee and the complete terms of the transfer (the “Sale Notice”).

9.3.sec=The {Company} shall have the right to purchase all (and only all) of the Offered Interests on the terms set forth in the Sale Notice. The {Company} may exercise its right to purchase only by giving written notice thereof to the selling {Member} within forty-five (45) days after the date on which the {Company} received the Sale Notice. The selling {Member} shall not participate in any vote that may be required in connection with the {Company}’s decision as to whether to exercise its right to purchase all of the Offered Interests.

9.4.sec=If the {Company} does not exercise its right to purchase all of the Offered Interests, the Directors shall have the right, collectively, to purchase from the selling {Member} all (and only all) of the Offered Interests on the terms set forth in the Sale Notice.The Directors may exercise their right to purchase only by giving written notice thereof to the selling {Member} within fifteen (15) days of the {Company}’s written decision to not, or failure to, exercise its right to purchase the Offered Interests. If the total amount of the Offered Interests specified in the Directors’ acceptance notices exceeds the Offered Interests, the Directors electing to purchase the Offered Interests shall each purchase an equal amount of the Offered Interests.

9.=[Bit/Ssec_04]

Transfer.Xref={x-}Section 9{-x}

10.Ti=Distributions

10.sec=The {Company} shall not make distributions to the {Member} or any of the Directors, except upon (a) the dissolution of the {Company} under Section {Term.Stop.BoardVote.Xref}; or (b) as necessary to recompensate the {Member} for any and all applicable income taxes the {Member} bears as a result of {Company} revenues.

Term.Stop.BoardVote.Xref={x-}Section 11.2.(a){-x}

Note=should be 11.2(b)

Term.Stop.BankBalance.Xref={x-}Section 11.1(b){-x}

11.Ti=Term

11.1.sec=This {Agreement} will remain in effect in perpetuity until:

11.1.1..sec=the Board of Directors elects to dissolve the {Company}; or

11.1.2.sec=the {Company} reaches, for thirty (30) consecutive days, a bank account balance of {BankBalanceTrigger.$}.

11.1.xlist={11.1.alist}

11.1.=[Bit/Ssec_02]

11.2.0.sec=If this {Agreement} is terminated pursuant to {Term.Stop.BoardVote.Xref}, the {Company}’s assets shall be distributed in the following order:

11.2.1.sec=First, to the payment of the debts and liabilities of the {Company} to creditors, including the {Member} and Directors who are creditors, to the extent permitted by law, in satisfaction of such debts and liabilities, and to the payment of necessary expenses of liquidation and dissolution;

11.2.2.sec=Second, to the {Member} in the amount of his capital contribution to the {Company}; and

11.2.3.sec=Then to the Board of Directors, in equal amounts.

11.2.=[Bit/Ssec_03]

11.3.sec=If this {Agreement} is terminated pursuant to {Term.Stop.BankBalance.Xref} above, all persons on the Board of Directors on the 30th day after termination who are not a {Member}s shall automatically become members of the {Company}, in the same percentages as their voting interests under {Management.Xref} of this {Agreement}, without any action by the {Member}, the Board of Directors, or the {Company}. Thereafter, all of the members shall meet as soon as practically possible to (a) determine the consideration due to the {Member} and/or the {Company} in exchange for their interest in the {Company}; and (b) draft a new operating agreement for the {Company}.

Term.AfterStopForBankBalance.Xref={x-}Section 11.3{-x}

11.=[Bit/Ssec_03]

12.Ti=Miscellaneous

12.sec=This {Agreement} constitutes the entire understanding of the parties and supersedes all prior written and oral agreements regarding the subject matter herein.  All disputes arising from or under this agreement will be governed by the laws of the state of {State}, without reference to conflicts of law principles.

90.sec={Member.Sign.Block}

=[Bit/Sec_12]

DocBody={Doc}

Agreement={d-}Agreement{-d}

Company={d-}Company{-d}

Member={d-}Member{-d}

Members={d-}Members{-d}

d-=<a><font color="green">

-d=</font></a>

x-=<a><font color="darkblue">
 
-x=</font></a>