Model.Root={Intake.DocBody}

Intake.DocBody=<b>{Head}</b><br><br><ol><li>{Session.Sec}</li><li>{Client.Sec}</li><li>{Project.Sec}</li><li>{Business.Sec}</li></ol>

Head={LH}<br>{Ti}

LH=Office of Business Development/Boston Main Street

Ti=CLIENT/BUSINESS INTAKE FORM
              

Session.Sec=<b>Session:</b><ul><li><b>Date:</b> {Session.Date}</li><li><b>Staff:</b>  {Session.Author.Name.Full}</li><li><b>Session Type:</b> (<u>V</u>isit, <u>P</u>hone, <u>W</u>alk-in) {Session.Type}</li><li><b>Referral:</b> {Referral.Name.Full}</li><li><b>Notes:</b> {Note}</li><li><b>Application Completed?:</b> (<u>Y</u>es/<u>N</u>o) {Application.Completed}</li></ul>


Client.Sec=<b>Client:</b><ul><li><b>First Name:</b>  {Client.Name.First}</li><li><b>Last Name:</b> {Client.Name.Last}</li><li><b>Phone:</b> {Client.Phone.Fixed}</li><li><b>Mobile:</b> {Client.Phone.Mobile}</li><li><b>Email:</b> {Client.Email}</li></li><li><b>Immigrant:</b> {Client.Immigrant}</li><li><b>Ethnicity:</b> {Client.Ethnicity}</li><li><b>Language:</b> {Client.Language}</li></ul>

Project.Sec=<b>Project:</b><ul><li><b>Name:</b> {Project.Name}</li><li><b>Stage:</b> {Project.Stage}</li><li><b>Address:</b><ul><li><b>First Line:</b> {Project.Addr.1}</li><li><b>Zip:</b> {Project.Addr.Zip}</li></li><li><b>Billing:</b>  {Project.Billing.Addr.1,2}</li></ul><li><b>FIN:</b> {Project.FIN}</li><li><b>Social Security:</b> {Project.SS}</li><li><b>DUNS:</b> {Project.DUNS}</li><li><b>Sector:</b>  {Project.Sector}</li><li><b>Minority Owned:</b> {Project.Owned.Minority}</li><li><b>Women Owned:</b>  {Project.Owned.Female}</li></ul>

Business.Sec=<b>Business</b><ul><li><b>Description:</b> {Business.Description}</li><li><b>Start Date:</b> {Business.Start.YMD}</li><li><b>Number of Employees:</b>  {Employee.Quantity}</li><li><b>Number of Jobs:</b>  {Business.Job.Quantity}</li><li><b>Square Feet:</b>  {Business.SqFt}</li></ul>

Note/Sectors=List of valid sectors
Food=Food Sector

Service=Service Sector

Retail=Retail Section
mcolor=magenta