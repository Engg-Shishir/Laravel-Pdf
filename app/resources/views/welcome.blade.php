{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /*
  Common invoice styles. These styles will work in a browser or using the HTML
  to PDF anvil endpoint.
*/

body {
  font-size: 16px;
  width: 50%;
  margin: 0 auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table tr td {
  padding: 0;
}

table tr td:last-child {
  text-align: right;
}

.bold {
  font-weight: bold;
}

.right {
  text-align: right;
}

.large {
  font-size: 1.75em;
}

.total {
  font-weight: bold;
  color: #fb7578;
}

.logo-container {
  margin: 20px 0 70px 0;
}

.invoice-info-container {
  font-size: 0.875em;
}
.invoice-info-container td {
  padding: 4px 0;
}

.client-name {
  font-size: 1.5em;
  vertical-align: top;
}

.line-items-container {
  margin: 70px 0;
  font-size: 0.875em;
}

.line-items-container th {
  text-align: left;
  color: #999;
  border-bottom: 2px solid #ddd;
  padding: 10px 0 15px 0;
  font-size: 0.75em;
  text-transform: uppercase;
}

.line-items-container th:last-child {
  text-align: right;
}

.line-items-container td {
  padding: 15px 0;
}

.line-items-container tbody tr:first-child td {
  padding-top: 25px;
}

.line-items-container.has-bottom-border tbody tr:last-child td {
  padding-bottom: 25px;
  border-bottom: 2px solid #ddd;
}

.line-items-container.has-bottom-border {
  margin-bottom: 0;
}

.line-items-container th.heading-quantity {
  width: 50px;
}
.line-items-container th.heading-price {
  text-align: right;
  width: 100px;
}
.line-items-container th.heading-subtotal {
  width: 100px;
}

.payment-info {
  width: 38%;
  font-size: 0.75em;
  line-height: 1.5;
}

.footer {
  margin-top: 100px;
}

.footer-thanks {
  font-size: 1.125em;
}

.footer-thanks img {
  display: inline-block;
  position: relative;
  top: 1px;
  width: 16px;
  margin-right: 4px;
}

.footer-info {
  float: right;
  margin-top: 5px;
  font-size: 0.75em;
  color: #ccc;
}

.footer-info span {
  padding: 0 5px;
  color: black;
}

.footer-info span:last-child {
  padding-right: 0;
}

.page-container {
  display: none;
}

    </style>
</head>
<body>
    <div class="page-container">
        Page
        <span class="page"></span>
        of
        <span class="pages"></span>
      </div>
      
      <div class="logo-container">
        <img
          style="height: 18px"
          src="https://app.useanvil.com/img/email-logo-black.png"
        >
      </div>
      
      <table class="invoice-info-container">
        <tr>
          <td rowspan="2" class="client-name">
            Client Name
          </td>
          <td>
            Anvil Co
          </td>
        </tr>
        <tr>
          <td>
            123 Main Street
          </td>
        </tr>
        <tr>
          <td>
            Invoice Date: <strong>May 24th, 2024</strong>
          </td>
          <td>
            San Francisco CA, 94103
          </td>
        </tr>
        <tr>
          <td>
            Invoice No: <strong>12345</strong>
          </td>
          <td>
            hello@useanvil.com
          </td>
        </tr>
      </table>
      
      
      <table class="line-items-container">
        <thead>
          <tr>
            <th class="heading-quantity">Qty</th>
            <th class="heading-description">Description</th>
            <th class="heading-price">Price</th>
            <th class="heading-subtotal">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>Blue large widgets</td>
            <td class="right">$15.00</td>
            <td class="bold">$30.00</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Green medium widgets</td>
            <td class="right">$10.00</td>
            <td class="bold">$40.00</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Red small widgets with logo</td>
            <td class="right">$7.00</td>
            <td class="bold">$35.00</td>
          </tr>
        </tbody>
      </table>
      
      
      <table class="line-items-container has-bottom-border">
        <thead>
          <tr>
            <th>Payment Info</th>
            <th>Due By</th>
            <th>Total Due</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="payment-info">
              <div>
                Account No: <strong>123567744</strong>
              </div>
              <div>
                Routing No: <strong>120000547</strong>
              </div>
            </td>
            <td class="large">May 30th, 2024</td>
            <td class="large total">$105.00</td>
          </tr>
        </tbody>
      </table>
      
      <div class="footer">
        <div class="footer-info">
          <span>hello@useanvil.com</span> |
          <span>555 444 6666</span> |
          <span>useanvil.com</span>
        </div>
        <div class="footer-thanks">
          <img src="https://github.com/anvilco/html-pdf-invoice-template/raw/main/img/heart.png" alt="heart">
          <span>Thank you!</span>
        </div>
      </div>
      
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
		<h1>A simple, clean, and responsive HTML invoice template</h1>
		<h3>Because sometimes, all you need is something simple.</h3>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://i.postimg.cc/ZY1BkPsB/logo.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Invoice #: 123<br />
									Created: January 1, 2015<br />
									Due: February 1, 2015
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Sparksuite, Inc.<br />
									12345 Sunny Road<br />
									Sunnyville, TX 12345
								</td>

								<td>
									Acme Corp.<br />
									John Doe<br />
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td>Check #</td>
				</tr>

				<tr class="details">
					<td>Check</td>

					<td>1000</td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>Website design</td>

					<td>$300.00</td>
				</tr>

				<tr class="item">
					<td>Hosting (3 months)</td>

					<td>$75.00</td>
				</tr>

				<tr class="item last">
					<td>Domain name (1 year)</td>

					<td>$10.00</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: $385.00</td>
				</tr>
			</table>
		</div>
	</body>
</html>
