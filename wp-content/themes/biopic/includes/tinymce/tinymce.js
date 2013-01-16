function init() {
	tinyMCEPopup.resizeToInnerSize();
}

function getCheckedValue(radioObj) {
	if(!radioObj) {
		return "";
	}
	var radioLength = radioObj.length;
	if (radioLength == undefined) {
		if (radioObj.checked) {
			return radioObj.value;
		}
		else {
			return "";
		}
	}
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

function biopicshortcodesubmit() {
	
	var tagtext;
	
	var biopic_shortcode = document.getElementById('biopicshortcode_panel');
	
	if (biopic_shortcode.className.indexOf('current') != -1) {
		var biopic_shortcodeid = document.getElementById('biopicshortcode_tag').value;
		switch(biopic_shortcodeid) {
			case 0:
				tinyMCEPopup.close();
			  break;
			
			case "textblock":
				tagtext = "["+ biopic_shortcodeid + " title=\"Title goes here\"] Description goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "tabs":
				tagtext = "["+ biopic_shortcodeid + " tabs=\"Tab1,Tab2,Tab3\"]";
				break;
				
			case "tabscontent":
				tagtext = "["+ biopic_shortcodeid + "] Add individual tabs content here [/" + biopic_shortcodeid + "]";
				break;
				
			case "tabcontent":
				tagtext = "["+ biopic_shortcodeid + " id=\"Title Should match the corresponding tab title e.g. Tab1\"] Tab content goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "tabsexample":
				tagtext = "[tabs tabs=\"Tab1,Tab2,Tab3\"][tabscontent][tabcontent id=\"tab1\" class=\"active\"]Tab1 content goes here[/tabcontent][tabcontent id=\"tab2\"]Tab2 content goes here[/tabcontent][tabcontent id=\"tab3\"]Tab3 content goes here[/tabcontent][/tabscontent]";
				break;
				
			case "toggle":
				tagtext = "["+ biopic_shortcodeid + " title=\"Title goes here\"] Content goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "accordiontabsexample":
				tagtext = "[accordion id=\"option-id\"][accordiontab title=\"Tab 1\" active=\"true\"]Tab 1 content goes here[/accordiontab][accordiontab title=\"Tab 2\"]Tab 2 content goes here[/accordiontab][accordiontab title=\"Tab 3\"]Tab 3 content goes here[/accordiontab][accordiontab title=\"Tab 4\"]Mauris a tempor tellus. Sed feugiat sem ac tellus mollis rhoncus. Nunc ante diam, tincidunt in bibendum id, porttitor ac justo. Sed felis urna, imperdiet ac molestie eu, interdum eget elit. Aenean dui diam, adipiscing nec tincidunt eget, cursus et tortor. Sed sollicitudin gravida dui.[/accordiontab][accordiontab title=\"Tab 5\"]Mauris a tempor tellus. Sed feugiat sem ac tellus mollis rhoncus. Nunc ante diam, tincidunt in bibendum id, porttitor ac justo. Sed felis urna, imperdiet ac molestie eu, interdum eget elit. Aenean dui diam, adipiscing nec tincidunt eget, cursus et tortor. Sed sollicitudin gravida dui.[/accordiontab][/accordion]";
				break;
			
			case "blockquote":
				tagtext = "["+ biopic_shortcodeid + " author=\"Optional\"] Quote text goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "gmap":
				tagtext = "["+ biopic_shortcodeid + " address=\"Specify Address\" zoom=\"Specify zoom value e.g. 16\" latitude=\"Optional latitude value goes here\" longitude=\"Optional longitude value goes here\" width=\"Specify either in px e.g. 600px or 100%\" height=\"Specify either in pixels e.g. 400px\" maptype=\"Choose from HYBRID, SATELLITE, ROADMAP or TERRAIN\"]";
				break;
				
			case "list":
				tagtext = "["+ biopic_shortcodeid + "  type=\"Specify one of the possible values here (see documentation for details\"] <ul><li>List Item 1</li><li>List Item 2</li></ul> [/" + biopic_shortcodeid + "]";
				break;
				
			case "table":
				tagtext = "["+ biopic_shortcodeid + "] <table width=\"100%\"><thead><tr><th>Column 1</th><th>Column 2</th><th>Column 3</th><th>Column 4</th></tr></thead><tbody><tr><td>Item #1</td><td>Description</td><td>Subtotal:</td><td>$1.00</td></tr><tr><td>Item #2</td><td>Description</td><td>Subtotal:</td><td>$2.00</td></tr><tr><td>Item #1</td><td>Description</td><td>Subtotal:</td><td>$1.00</td></tr><tr><td>Item #2</td><td>Description</td><td>Subtotal:</td><td>$2.00</td></tr></tbody><tfoot><tr><td><strong>All Items</strong></td><td><strong>Description</strong></td><td><strong>Your Total:</strong></td><td><strong>$10.00</strong></td></tr></tfoot></table> [/" + biopic_shortcodeid + "]";
				break;
				
			case "tableexample":
				tagtext = "[table]<table width=\"100%\"><thead><tr><th>Column 1</th><th>Column 2</th><th>Column 3</th><th>Column 4</th></tr></thead><tbody><tr><td>Item #1</td><td>Description</td><td>Subtotal:</td><td>$1.00</td></tr><tr><td>Item #2</td><td>Description</td><td>Subtotal:</td><td>$2.00</td></tr><tr><td>Item #1</td><td>Description</td><td>Subtotal:</td><td>$1.00</td></tr><tr><td>Item #2</td><td>Description</td><td>Subtotal:</td><td>$2.00</td></tr></tbody><tfoot><tr><td><strong>All Items</strong></td><td><strong>Description</strong></td><td><strong>Your Total:</strong></td><td><strong>$10.00</strong></td></tr></tfoot></table>[/table]";
				break;
				
			case "pricingtable":
				tagtext = "["+ biopic_shortcodeid + " numplans=\"3\"] Insert Pricing Plans here using pricingplan shortcode [/" + biopic_shortcodeid + "]";
				break;
				
			case "pricingplan":
				tagtext = "["+ biopic_shortcodeid + " title=\"Title goes here\" linktext=\"Sign Up\" link=\"http://google.com\" price=\"$10\" recurrence=\"month\" featured=\"false\"] <ul><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li></ul> [/" + biopic_shortcodeid + "]";
				break;
				
			case "pricingtableexample":
				tagtext = "[pricingtable numplans=\"3\"][pricingplan title=\"Chandi\" linktext=\"Sign Up\" link=\"http://google.com\" price=\"$10\" recurrence=\"month\"]<ul><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li></ul>[/pricingplan][pricingplan title=\"Sona\" linktext=\"Sign Up\" link=\"http://google.com\" price=\"$20\" recurrence=\"month\" featured=\"true\"]<ul><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li></ul>[/pricingplan][pricingplan title=\"Heera\" linktext=\"Sign Up\" link=\"http://google.com\" price=\"$30\" recurrence=\"month\"]<ul><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li><li>Plan Item</li></ul>[/pricingplan][/pricingtable]";
				break;
				
			case "space":
				tagtext = "["+ biopic_shortcodeid + " space=\"Choose from less, more and most\"]";
				break;
				
			case "hr":
				tagtext = "["+ biopic_shortcodeid + " type=\"Choose 1, 2 or 3\"]";
				break;
				
			case "highlight":
				tagtext = "["+ biopic_shortcodeid + "] Your content goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "alert":
				tagtext = "["+biopic_shortcodeid + " type=\"Choose from standard, warning, notice, success, error or info\"] Alert content goes here [/" + biopic_shortcodeid + "]";
				break;
				
			case "button":
				tagtext = "["+biopic_shortcodeid + " label=\"Insert button label here\" link=\"Insert link here\" shape=\"Choose either default or round\"]";
				break;
				
			case "video":
				tagtext = "["+biopic_shortcodeid + " type=\"Specify either it's a youtube video or vimeo video\" id=\"Insert youtube or vimeo video id here\" width=\"Specificy video width here\" height=\"Specificy video height here\"]";
				break;
				
			case "screenshot":
				tagtext = "["+biopic_shortcodeid + " thumb=\"Paste thumbnail path here\" image=\"Paste image path here\"]";
				break;
			
			case "latesttweet":
				tagtext = "["+biopic_shortcodeid + " screenname=\"your twitter id here\"]";
				break;
				
			case "column":
				tagtext = "["+biopic_shortcodeid + " size=\"specify column size here\"] insert your content here [/" + biopic_shortcodeid + "]";
				break;
				
			default:
				tagtext = "["+biopic_shortcodeid + "] Insert you content here [/" + biopic_shortcodeid + "]";
		}
	}
	
	if(window.tinyMCE) {
		//TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
		window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext);
		//Peforms a clean up of the current editor HTML. 
		//tinyMCEPopup.editor.execCommand('mceCleanup');
		//Repaints the editor. Sometimes the browser has graphic glitches. 
		tinyMCEPopup.editor.execCommand('mceRepaint');
		tinyMCEPopup.close();
	}
	return;
}