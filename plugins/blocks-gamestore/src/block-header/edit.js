import { __ } from "@wordpress/i18n";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
	faMagnifyingGlass,
	faSun,
	faBasketShopping,
} from "@fortawesome/free-solid-svg-icons";

import {
	useBlockProps,
	InnerBlocks,
	InspectorControls,
} from "@wordpress/block-editor";
import { PanelBody } from "@wordpress/components";
import "./editor.scss";
import { TextControl } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
	const { memberLink, cartLink } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Settings", "blocks-gamestore")}>
					<TextControl
						label="Memebr Link"
						value={memberLink}
						onChange={(value) => setAttributes({ memberLink: value })}
					/>
					<TextControl
						label="Cart Link"
						value={cartLink}
						onChange={(value) => setAttributes({ cartLink: value })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<header>
					<div id="header-block" className="inner-header">
						<InnerBlocks />
						<div className="right-section">
							<div className="header-search">
								<FontAwesomeIcon icon={faMagnifyingGlass} />
							</div>
							<div className="header-mode-switcher">
								<FontAwesomeIcon icon={faSun} />
							</div>
							{cartLink && (
								<div className="header-cart-link">
									<a href={cartLink}>
										<FontAwesomeIcon icon={faBasketShopping} />
									</a>
								</div>
							)}

							{memberLink && (
								<div className="header-member-link">
									<a href={memberLink}>Memeber Area</a>
								</div>
							)}
						</div>
					</div>
				</header>
			</div>
		</>
	);
}
