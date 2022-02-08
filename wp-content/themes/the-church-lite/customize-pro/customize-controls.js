( function( api ) {
	// Extends our custom "the-church-lite" section.
	api.sectionConstructor['the-church-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );