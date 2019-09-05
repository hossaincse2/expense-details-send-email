<!DOCTYPE html>
<html>
<head>
  <title>Blueshifip</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="" href="css/style.css">

</head>
<body>

  <header>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
          <img src="img/logo.png" alt="">
      </div>
    </div>
  </div>
</header>
<div class="empty_space"></div>
  <section class="heading_text">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <p>Client Expense Tracking Functions</p>
      </div>
    </div>
      <div class="empty_space"></div>
    <div class="row">
      <div class="col-md-5ths text-center">
           <div class="box">
            <a href="#" data-toggle="modal" data-target="#expenseModal"><img class="hovereffect" style="width: 65px;" src="img/expense.svg" alt=""></a>   
           </div>
           <h3><a href="#" data-toggle="modal" data-target="#expenseModal">Add <br> Expense</a></h3>
         </div>
       <div class="col-md-5ths text-center">
          <div class="box">
              <a href="#" data-toggle="modal" data-target="#vendoreModal"><img class="hovereffect2" src="img/vendor.svg" alt=""></a> 
            </div>
            <h3><a href="#" data-toggle="modal" data-target="#vendoreModal">Add Vendor <br> Estimate</a></h3>
        </div>
       <div class="col-md-5ths text-center">
          <div class="box">
              <a href="#" data-toggle="modal" data-target="#invoiceModal"><img class="hovereffect2" src="img/invoice.svg" alt=""></a> 
            </div> 
            <h3> <a href="#" data-toggle="modal" data-target="#invoiceModal">Add Vendor  <br>Invoice</a></h3>
        </div>
        <div class="col-md-5ths text-center">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#paymentModal"><img class="hovereffect" style="width: 65px;" src="img/payment.svg" alt=""></a> 
              </div>
              <h3><a href="#" data-toggle="modal" data-target="#paymentModal">Add Payment  <br>to Vendor</a></h3>
      </div>
     <div class="col-md-5ths text-center">
        <div class="box">
            <a href="#" data-toggle="modal" data-target="#cardModal"><img class="hovereffect" style="width: 65px;" src="img/credit_card.svg" alt=""></a> 
          </div> 
          <h3><a href="#" data-toggle="modal" data-target="#cardModal">Add Payment  <br>to Credit Card</a></h3>
    </div>
    </div>
  </div>
  </section>
  <div class="empty_space"></div>

  <footer class="overlay">
      <div class="container text-center">
          <div class="row">
          <div class="col-md-12">
            <ul class="list-inline">
              <li><a href=""><img src="img/facebook.svg" alt="facebook"></a></li>
              <li><a href=""><img src="img/twitter.svg" alt="twitter"></a></li>
            </ul>
            <p> <span><img style="width: 13px;position: relative;top: -1px" src="img/mail.svg" alt="mail"> &nbsp;info@blueshiftip.com </span> &nbsp; &nbsp;  <span><img style="width: 12px;" src="img/call.svg" alt="call"> &nbsp;617-207-6141</span> </p>
            <p>Copyright &copy; 2018 Blueshift IP. All Rights Reserved.</p>
         </div>
       </div>
       </div>
   </footer>
 	<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Expense Modal  1-->
<div class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="expenseLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form id="idForm1" method="POST" action="email_template1.php" enctype="multipart/form-data"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="expenseModalLabel">ADD EXPENSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <img style="width:35px" src="img/close.svg">
        </button>
      </div>
      <div class="modal-body"> 
  <div class="form-group">
      <div class="row">
        <div class="col-sm-4 "> 
          <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Tabs3 Matter</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="tabs_matter"  class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
  </div>
  <div class="form-group">
      <div class="row">
        <div class="col-sm-4 "> 
          <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Old/QB Matter</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="qb_matter" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
  </div> 
  <div class="form-group">
      <div class="row">
          <div class="col-sm-4 "> 
            <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Service Type</label>
          </div>
          <div class="col-sm-8">
            <select name="service_type" class="form-control" id="exampleFormControlSelect1">
             <option value="Select">Select</option>
            </select>
          </div>
    </div>
  </div>
  <div class="form-group">
      <div class="row">
        <div class="col-sm-4 "> 
          <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Service Name</label>
        </div>
        <div class="col-sm-8">
          <input type="text" name="service_name" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
        </div>
    </div>
  </div>
  <div class="form-group">
      <div class="row">
        <div class="col-sm-4 "> 
          <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Description for <br/> client invoice</label>
        </div>
        <div class="col-sm-8">
          <textarea  name="desc_client_invoice" class="form-control form-control-sm" id="colFormLabelSm" placeholder=""> </textarea>
        </div>
    </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col-sm-4 "> 
            <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Billing type</label>
          </div>
          <div class="col-sm-8">
            <select name="billing_type" class="form-control" id="exampleFormControlSelect1">
             <option value="">Select</option>
             <option value="Hourly">Hourly</option>
             <option value="Fixed Fee">Fixed Fee</option>
             <option value="Fixed Fee + Expenses">Fixed Fee + Expenses</option>
            </select>
          </div>
    </div>
  </div> 
  <div class="form-group">
      <div class="row">
          <div class="col-sm-4 "> 
            <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Reimbursement type</label>
          </div>
          <div class="col-sm-8">
            <select name="reimb_type" class="form-control" id="exampleFormControlSelect1">
             <option value="">Select</option>
             <option value="Reimburse off Invoice">Reimburse off Invoice</option>
             <option value="Reimburse on Invoice">Reimburse on Invoice</option>
             <option value="Not Reimbursable">Not Reimbursable</option>
            </select>
          </div>
    </div>
  </div>  
       
    <div class="form-group">
    <div class="row">
      <div class="col-sm-4">
         <label class="col-form-label">Process Complete?</label>
       </div>
      <div class="col-sm-8">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="processComplete" id="gridRadios1" value="Yes">
          <label class="form-check-label" for="gridRadios1">
            Yes
          </label>
          <input class="form-check-input" type="radio" name="processComplete" id="gridRadios2" value="No" checked>
          <label class="form-check-label" for="gridRadios2">
            No
          </label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group">
    <div class="row">
        <div class="col-sm-12 "> 
        <hr>
       </div>
    </div>
  </div> 
<div class="form-group">
    <div class="row">
        <div class="col-sm-12 "> 
          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Comment</label>
        </div>
        <div class="col-sm-12">
            <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
        </div>
  </div>
</div> 
<div class="row text-right">
               <div class="col-sm-12 ">
<button type="reset" data-dismiss="modal" aria-label="Close" class="btn">Cancel</button>
<button type="submit" name="submit" class="btn btn-success">Send</button>
    </div>
    </div>
    </div>
    </div>
  </form>
</div>
</div>
</div>

<!--Vendor Modal 2-->
<div class="modal fade" id="vendoreModal" tabindex="-1" role="dialog" aria-labelledby="vendorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form id="idForm2" method="POST" action="email_template2.php" enctype="multipart/form-data"> 
    <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="vendorModalLabel">ADD VENDOR ESTIMATE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img style="width:35px" src="img/close.svg">
            </button>
          </div>
          <div class="modal-body"> 
          <div class="form-group">
              <div class="row">
                <div class="col-sm-4 "> 
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Expense</label>
                </div>
                <div class="col-sm-8"> 
                  <input type="text" name="expense" class="form-control form-control-sm" id="expense" placeholder="TM/QBM/SN">
                 </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col-sm-4 "> 
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Vendor Name</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" name="vendo_name" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                </div>
            </div>
          </div> 
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Vendor Estimate</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" style="text-align:right" class="form-control form-control-sm" name="vendor_estimate" placeholder="">
                    <span class="doler-sign">$</span>
                     
                  </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                <div class="col-sm-4 "> 
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Estimate Currency</label>
                </div>
                <div class="col-sm-8">  
                  <input type="text" style="text-align:left" class="form-control form-control-sm" name="estimate_currence" placeholder="">
                 </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Estimate Date</label>
                  </div>
                  <div class="col-sm-8"> 
                  <input type="date" class="form-control form-control-sm" name="estimate_date" placeholder="mm/dd/yy">
                 </div>
                  <!--  <div class="col-sm-8">
                      <div class="row">
                    <div class="col-md-3 pr0">
                        <input type="text" name="estimate_date_d" class="form-control form-control-sm" placeholder="dd">
                    </div> 
                    <div class="col-md-3 pr0">
                        <input type="text" name="estimate_date_m" class="form-control form-control-sm" placeholder="mm">
                    </div> 
                    <div class="col-md-6">
                        <input type="text" name="estimate_date_y" class="form-control form-control-sm" placeholder="yyyy">
                    </div> 
                    </div> 
                  </div> -->
                  
            </div>
          </div> 
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Attachments</label>
                  </div>
                  <div class="col-sm-8">
                     <input  type="hidden" id="attachment" name="attachmentfile" class="form-control">
                             <input  type="file" id="file1" name="attachmentold" class="form-control">
                          <span class="uploadedfile"></span>
                  </div>
            </div>
          </div>   
        
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-12 "> 
                  <hr>
                 </div>
              </div>
            </div> 
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12 "> 
                  <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Comment</label>
                </div>
                <div class="col-sm-12">
                    <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                </div>
          </div>
        </div> 
        <div class="row text-right">
               <div class="col-sm-12 ">
        <button type="reset" data-dismiss="modal" aria-label="Close" class="btn">Cancel</button>
        <button type="submit" name="submit" class="btn btn-success">Send</button>
          </div> 
      </div> 
      </div> 
      </div>
  </form>
 </div>
</div>
 
<!-- Invoice Modal 3-->
<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form id="idForm3" method="POST" action="email_template3.php" enctype="multipart/form-data"> 
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="vendorModalLabel">ADD VENDOR INVOICE</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img style="width:35px" src="img/close.svg">
                  </button>
                </div>
                <div class="modal-body"> 
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Expense</label>
                      </div>
                      <div class="col-sm-8"> 
                        <input type="text" class="form-control form-control-sm" name="expense" placeholder="TM/QBM/SN">
                       </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Vendor Invoice</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" name="vendo_invoice" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                      </div>
                  </div>
                </div> 
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Vendor Invoice Date</label>
                        </div>
                        <div class="col-sm-8"> 
                          <input type="date" class="form-control form-control-sm" name="estimate_date" placeholder="mm/dd/yy">
                         </div>
                  </div>
                </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Vendor Invoice Amount</label>
                        </div>
                        <div class="col-sm-8"> 
                           <input type="text" style="text-align:right" class="form-control form-control-sm" name="vendor_amount" placeholder="">
                          <span class="doler-sign">$</span>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Vendor Invoice Currency</label>
                      </div>
                      <div class="col-sm-8">  
                         <input type="text" style="text-align:left" class="form-control form-control-sm" name="invoice_currency" placeholder="">
                       </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4">
                         <label class="col-form-label">Ready to pay?</label>
                       </div>
                      <div class="col-sm-8">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="readyToPay" id="gridRadios1" value="Yes" >
                          <label class="form-check-label" for="gridRadios1">
                            Yes
                          </label>
                          <input class="form-check-input" type="radio" name="readyToPay" id="gridRadios2" value="No" checked>
                          <label class="form-check-label" for="gridRadios2">
                            No
                          </label>
                        </div>
                      </div>
                    </div>
                  </div> 
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Attachments</label>
                        </div>
                        <div class="col-sm-8">
                            <input  type="hidden" id="attachment2" name="attachmentfile" class="form-control">
                             <input  type="file" id="file2" name="attachmentold" class="form-control">
                          <span class="uploadedfile"></span>
                        </div>
                  </div>
                </div>
                 
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-3 pr0">
                         <label class="col-form-label custom_label">Accounting Software</label>
                       </div>
                      <div class="col-sm-9 pl0">
                          <hr class="custom_hr">
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4">
                         <label class="col-form-label">Entered into QuickBooks?</label>
                       </div>
                      <div class="col-sm-8">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="quickBooks" id="gridRadios1" value="Yes" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Yes
                          </label>
                          <input class="form-check-input" type="radio" name="quickBooks" id="gridRadios2" value="No">
                          <label class="form-check-label" for="gridRadios2">
                            No
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col-sm-4">
                           <label class="col-form-label">Entered into Tabs3?</label>
                         </div>
                        <div class="col-sm-8">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tab3" id="gridRadios1" value="Yes" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Yes
                            </label>
                            <input class="form-check-input" type="radio" name="tab3" id="gridRadios2" value="No">
                            <label class="form-check-label" for="gridRadios2">
                              No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-3 pr0">
                             <label class="col-form-label custom_label">Additional Information</label>
                           </div>
                          <div class="col-sm-9 pl0">
                              <hr class="custom_hr">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 "> 
                              <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Payments received</label>
                            </div>
                            <div class="col-sm-8"> 
                              <input type="text" style="text-align:right" class="form-control form-control-sm" name="payment_received" placeholder="">
                              <span class="doler-sign">$</span>
                            </div>
                       </div>
                     </div>  
                     <div class="form-group">
                      <div class="row">
                          <div class="col-sm-4 "> 
                            <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Amount owed from Client</label>
                          </div>
                          <div class="col-sm-8"> 
                            <input type="text" style="text-align:right" class="form-control form-control-sm" name="amount_client" placeholder="">
                          <span class="doler-sign">$</span>
                          </div>
                     </div>
                   </div>  
                   <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Payments made</label>
                        </div>
                        <div class="col-sm-8"> 
                           <input type="text" style="text-align:right" class="form-control form-control-sm" name="payment_made" placeholder="">
                          <span class="doler-sign">$</span>
                        </div>
                   </div>
                 </div>  
                 <div class="form-group">
                  <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Outstanding balance</label>
                      </div>
                      <div class="col-sm-8"> 
                        <input type="text" style="text-align:right" class="form-control form-control-sm" name="outstanding_blance" placeholder="">
                          <span class="doler-sign">$</span>
                      </div>
                 </div>
               </div> 
                 <div class="form-group">
                  <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Payments received</label>
                      </div>
                      <div class="col-sm-8"> 
                        <input type="text" style="text-align:right" class="form-control form-control-sm" name="payment_recive" placeholder="">
                          <span class="doler-sign">$</span>
                      </div>
                 </div>
               </div>   
              
               <div class="form-group">
                  <div class="row">
                      <div class="col-sm-12 "> 
                      <hr>
                     </div>
                  </div>
                </div> 
              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-12 "> 
                        <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Comment</label>
                      </div>
                      <div class="col-sm-12">
                          <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                      </div>
                </div>
              </div> 
              <div class="row text-right">
               <div class="col-sm-12 ">
              <button type="reset" data-dismiss="modal" aria-label="Close" class="btn">Cancel</button>
              <button type="submit" name="submit" class="btn btn-success">Send</button>
                </div> 
            </div> 
            </div> 
            </div>
        </form>
</div>


</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form id="idForm4" method="POST" action="email_template4.php" enctype="multipart/form-data"> 
          <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="vendorModalLabel">PAYMENT TO VENDOR</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img style="width:35px" src="img/close.svg">
                  </button>
                </div>
                <div class="modal-body"> 
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Expense</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" name="expense" placeholder="TM/QBM/SN"> 
                       </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4">
                       <label class="col-form-label">Vendor Paid?</label>
                     </div>
                    <div class="col-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="vendor_paid" id="gridRadios1" value="Yes" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Yes
                        </label>
                        <input class="form-check-input" type="radio" name="vendor_paid" id="gridRadios2" value="No">
                        <label class="form-check-label" for="gridRadios2">
                          No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Payment Amount</label>
                        </div>
                        <div class="col-sm-8"> 
                          <input type="text" style="text-align:right" class="form-control form-control-sm" name="payment_amount" placeholder="">
                          <span class="doler-sign">$</span>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Payment Currency</label>
                      </div>
                      <div class="col-sm-8"> 
                         <input type="text" style="text-align:left" class="form-control form-control-sm" name="estimate_currence" placeholder="">
                       </div>
                  </div>
                </div>
                 <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">QB Paid from Account</label>
                      </div>
                      <div class="col-sm-8">
                        <select name="qb_paid" class="form-control form-control-sm" id="">
                            <option value="">Select</option>
                            <option value="1001 – Operating">1001 – Operating</option>
                            <option value="1002 – CMG Capital">1002 – CMG Capital</option>
                            <option value="1003 – RP Capital">1003 – RP Capital</option>
                            <option value="1004 – Wires">1004 – Wires</option>
                            <option value="1005 – CMB Savings">1005 – CMB Savings</option>
                            <option value="1006 – RP Savings">1006 – RP Savings</option>
                            <option value="1007 – Dedicated Savings">1007 – Dedicated Savings</option>
                            <option value="1008 – USPTO Deposit">1008 – USPTO Deposit</option>
                            <option value="2105 – Firm CC">2105 – Firm CC</option>
                        </select>
                       </div>
                  </div>
                </div>
                 <div class="form-group">
                    <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Payment Method</label>
                      </div>
                      <div class="col-sm-8">
                        <select name="payment_methode" class="form-control form-control-sm" id="">
                            <option value="">Select</option>
                            <option value="Check">Check</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Wire">Wire</option>
                            <option value="EFT">EFT</option>
                        </select>
                       </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Paid Date</label>
                        </div>
                        <div class="col-sm-8">
                           <input type="date" name="estimate_date" class="form-control form-control-sm" placeholder="">
                        </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="row">
                      <div class="col-sm-4 "> 
                        <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Paid reference Number</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" name="paid_ref_number" placeholder="">
                      </div>
                </div>
              </div> 
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3 pr0">
                     <label class="col-form-label custom_label">Accounting Software</label>
                   </div>
                  <div class="col-sm-9 pl0">
                      <hr class="custom_hr">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4">
                     <label class="col-form-label">Entered into QuickBooks?</label>
                   </div>
                  <div class="col-sm-8">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="quickBooks" id="quickBooks" value="Yes" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Yes
                      </label>
                      <input class="form-check-input" type="radio" name="quickBooks" id="quickBooks2" value="No">
                      <label class="form-check-label" for="gridRadios2">
                        No
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-12 "> 
                      <hr>
                     </div>
                  </div>
                </div> 
              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-12 "> 
                        <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Comment</label>
                      </div>
                      <div class="col-sm-12">
                          <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                      </div>
                </div>
              </div> 
              <div class="row text-right">
               <div class="col-sm-12 ">
              <button type="reset" data-dismiss="modal" aria-label="Close" class="btn">Cancel</button>
              <button type="submit" name="submit" class="btn btn-success">Send</button>
                </div> 
            </div>
            </div> 
            </div>
        </form>
</div>


</div>
</div>


<!-- Card Modal -->
<div class="modal fade" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="cardModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="idForm5" method="POST" action="email_template5.php" enctype="multipart/form-data"> 
      <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="vendorModalLabel">PAYMENT TO CREDIT CARD</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img style="width:35px" src="img/close.svg">
              </button>
            </div>
            <div class="modal-body"> 
            <div class="form-group">
                <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Expense</label>
                  </div>
                  <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" name="expense" placeholder="TM/QBM/SN">
                   </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                   <label class="col-form-label">Credit Card Paid?</label>
                 </div>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="vendor_paid" id="gridRadios1" value="Yes" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Yes
                    </label>
                    <input class="form-check-input" type="radio" name="vendor_paid" id="gridRadios2" value="No">
                    <label class="form-check-label" for="gridRadios2">
                      No
                    </label>
                  </div>
                </div>
              </div>
            </div> 
            <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 "> 
                          <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Payment Amount</label>
                        </div>
                        <div class="col-sm-8"> 
                          <input type="text" style="text-align:right" class="form-control form-control-sm" name="payment_amount" placeholder="">
                          <span class="doler-sign">$</span>
                        </div>
                  </div>
                </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Payment Currency</label>
                  </div>
                  <div class="col-sm-8">  
                     <input type="text" style="text-align:left" class="form-control form-control-sm" name="payment_currence" placeholder="">
                   </div>
              </div>
            </div>
             <div class="form-group">
                <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">QB Paid from Account</label>
                  </div>
                  <div class="col-sm-8">
                    <select name="qb_paid" class="form-control form-control-sm" id="">
                        <option value="">Select</option>
                            <option value="1001 – Operating">1001 – Operating</option>
                            <option value="1002 – CMG Capital">1002 – CMG Capital</option>
                            <option value="1003 – RP Capital">1003 – RP Capital</option>
                            <option value="1004 – Wires">1004 – Wires</option>
                            <option value="1005 – CMB Savings">1005 – CMB Savings</option>
                            <option value="1006 – RP Savings">1006 – RP Savings</option>
                            <option value="1007 – Dedicated Savings">1007 – Dedicated Savings</option>
                            <option value="1008 – USPTO Deposit">1008 – USPTO Deposit</option>
                            <option value="2105 – Firm CC">2105 – Firm CC</option>
                        </select>
                   </div>
              </div>
            </div>
              
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4 "> 
                      <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Paid Date</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" name="estimate_date" class="form-control form-control-sm">
                    </div>
              </div>
            </div> 
            <div class="form-group">
              <div class="row">
                  <div class="col-sm-4 "> 
                    <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Paid reference Number</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" name="paid_ref_number" placeholder="">
                  </div>
            </div>
          </div> 
          <div class="form-group">
            <div class="row">
              <div class="col-sm-3 pr0">
                 <label class="col-form-label custom_label">Accounting Software</label>
               </div>
              <div class="col-sm-9 pl0">
                  <hr class="custom_hr">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                 <label class="col-form-label">Entered into QuickBooks?</label>
               </div>
              <div class="col-sm-8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="quickBooks" id="gridRadios1" value="Yes" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Yes
                  </label>
                  <input class="form-check-input" type="radio" name="quickBooks" id="gridRadios2" value="No">
                  <label class="form-check-label" for="gridRadios2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-12 "> 
                  <hr>
                 </div>
              </div>
            </div> 
          <div class="form-group">
              <div class="row">
                  <div class="col-sm-12 "> 
                    <label for="colFormLabelLg" class="col-form-label col-form-label-lg">Comment</label>
                  </div>
                  <div class="col-sm-12">
                      <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                  </div>
            </div>
          </div> 
          <div class="row text-right">
               <div class="col-sm-12 "> 
               <button type="reset" data-dismiss="modal" aria-label="Close" class="btn">Cancel</button>
               <button type="submit" name="submit" class="btn btn-success">Send</button>
            </div> 
           </div>
        </div> 
    </div>
    </form>
</div>


</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
<script src="js/ajaxupload.3.5.js"></script>

 </body>
</html>

 
