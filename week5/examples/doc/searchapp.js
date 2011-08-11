/**
 * Creates a SearchApp that adds live searching to a supplied table of data.
 * @class Searches table and manages visibilty of applicable search results.
 * @constructor
 * @version 1.1
 *
 * @property {Object} self Internal reference to <code>this</code>.
 * @property {Object} root jQuery DOM Reference to root node for instance
 *
 * @param {Object} $element The root jQuery DOM reference, containing the search field and table of data.
 */
function SearchApp($element) {
	var self = this;
	this.root = $element;
	
	/**
	 * Searches through all table data for the supplied search term, hiding all rows that do not match.
	 * @returns {null} Does not return a value.
	 */
	this.search = function(event) {
		$('tbody tr', self.root.children('.list')).show().not(":contains(" + $(this).val() + ")").hide();
	}
	
	$('input', this.root).keyup(this.search);
	$('[type=submit]', this.root).hide();
}