<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*
 * Created on Apr 13, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once('include/EditView/EditView2.php');
 class test_New_Module_1ViewEdit extends SugarView{
 	var $ev;
 	var $type ='edit';
 	var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates
 	var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function
 	var $showTitle = true;

 	function test_New_Module_1ViewEdit(){
 		parent::SugarView();
 	}

    /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay()
    {
        $metadataFile = $this->getMetaDataFile();
        $this->ev = $this->getEditView();
        $this->ev->ss =& $this->ss;
        $this->ev->setup($this->module, $this->bean, $metadataFile, 'include/EditView/EditView.tpl');
    }

 	function display(){
	$js=<<<ECG
	<script>
	// addToValidateLessThan('EditView', 'final_date', 'date', false, 'final', 'booking_date', 'Booking');
	// addToValidateMoreThan('EditView', 'final_date', 'date', false, 'final', 'booking_date', 'Booking');
	// addToValidateComparison('EditView', 'final_date', 'date', false, 'final', 'booking_date');
	function customValidation()
	{
		var fin_payment_date=document.getElementById("final_date").value;
		fin_payment_date=fin_payment_date.replace("-","/");
		fin_payment_date=fin_payment_date.replace("-","/");
		// alert(fin_payment_date.substring(3,5));
		var chk_year=fin_payment_date.substring(6,10);
		var chk_month=fin_payment_date.substring(3,5);
		chk_month=chk_month.replace("/","");
		if(chk_month.length == 1)
		{
			chk_month='0'+chk_month;
			chk_year=fin_payment_date.substring(5,10);
		}
		fin_payment_date=chk_month+'/'+fin_payment_date.substring(0,2)+'/'+chk_year;
		fin_payment_date=Date.parse(fin_payment_date);
		// alert(fin_payment_date);
		
		var booking_datebooking_date=document.getElementById("booking_date").value;
		booking_datebooking_date=booking_datebooking_date.replace("-","/");
		booking_datebooking_date=booking_datebooking_date.replace("-","/");
		booking_datebooking_date=booking_datebooking_date.substring(3,5)+'/'+booking_datebooking_date.substring(0,2)+'/'+booking_datebooking_date.substring(6,10);
		booking_datebooking_date=Date.parse(booking_datebooking_date);
		// alert(booking_datebooking_date); 
		// isError = true;
			add_error_style('EditView', 'final_date', 'yo');
			add_error_style('EditView', 'description', 'jojo');
		// return true;
		
	}
	</script>
ECG;
		$this->ev->process();
		echo $this->ev->display($this->showTitle);
		echo $js;
 	}

    /**
     * Get EditView object
     * @return EditView
     */
    protected function getEditView()
    {
        return new EditView();
    }
}

