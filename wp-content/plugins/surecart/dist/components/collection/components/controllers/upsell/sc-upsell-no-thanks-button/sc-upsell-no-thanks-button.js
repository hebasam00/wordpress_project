import{Host,h}from"@stencil/core";import{decline}from"@store/upsell/mutations";export class ScUpsellNoThanksButton{render(){return h(Host,{onClick:()=>decline()},h("slot",null))}static get is(){return"sc-upsell-no-thanks-button"}static get originalStyleUrls(){return{$:["sc-upsell-no-thanks-button.scss"]}}static get styleUrls(){return{$:["sc-upsell-no-thanks-button.css"]}}}