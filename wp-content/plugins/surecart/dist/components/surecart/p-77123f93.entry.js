import{r as t,h as o,a as i}from"./p-cc7ce8c7.js";const r=":host{display:inline-block}.cc-logo{border-radius:var(--sc-cc-border-radius, 4px);line-height:0;overflow:hidden}";const s=class{constructor(o){t(this,o);this.brand=undefined}renderLogo(){if(["visa","mastercard","amex","discover","diners","jcb","unionpay"].includes(this.brand)){return o("sc-icon",{name:this.brand,style:{"--height":"0.63em"}})}return o("sc-icon",{name:"creditcard",style:{"--height":"0.63em"}})}render(){return o("div",{class:"cc-logo",part:"base"},this.renderLogo())}};s.style=r;const e='.tooltip{position:relative}.tooltip--has-width .tooltip-text{white-space:normal;min-width:var(--sc-tooltip-width);max-width:var(--sc-tooltip-width)}.tooltip-text{position:fixed;background:var(--sc-color-gray-900);border-radius:var(--sc-border-radius-small);padding:var(--sc-spacing-small);font-family:var(--sc-input-font-family);font-size:var(--sc-input-font-size-small);white-space:nowrap;line-height:1.2;color:var(--sc-color-white);z-index:99999}.tooltip-text:after{content:"";position:absolute;transform:translateX(-50%);top:calc(100% - 1px);left:50%;height:0;width:0;border:7px solid transparent;border-top-color:var(--sc-color-gray-900)}.tooltip--primary .tooltip-text{background:var(--sc-color-primary-500)}.tooltip--primary .tooltip-text:after{border-top-color:var(--sc-color-primary-500)}.tooltip--success .tooltip-text{background:var(--sc-color-success-500)}.tooltip--success .tooltip-text:after{border-top-color:var(--sc-color-success-500)}.tooltip--info .tooltip-text{background:var(--sc-color-info-500)}.tooltip--info .tooltip-text:after{border-top-color:var(--sc-color-info-500)}.tooltip--warning .tooltip-text{background:var(--sc-color-warning-500)}.tooltip--warning .tooltip-text:after{border-top-color:var(--sc-color-warning-500)}.tooltip--danger .tooltip-text{background:var(--sc-color-danger-500)}.tooltip--danger .tooltip-text:after{border-top-color:var(--sc-color-danger-500)}';const n=class{constructor(o){t(this,o);this.open=undefined;this.width=undefined;this.text=undefined;this.freeze=undefined;this.padding=5;this.type="info";this.top=-1e4;this.left=-1e4}componentDidLoad(){this.handleWindowScroll()}handleWindowScroll(){if(!this.open)return;if(!this.tooltip)return;var t=this.tooltip.getBoundingClientRect();var o=this.el.getBoundingClientRect();this.top=o.top-(t.height+this.padding);const i=Math.max(o.left+o.width/2-t.width/2+this.padding,0);this.left=Math.min(i,window.innerWidth-t.width)}handleOpenChange(){setTimeout((()=>this.handleWindowScroll()),0)}handleBlur(){if(this.freeze)return;this.open=false}handleClick(){if(this.freeze)return;this.open=true}handleFocus(){if(this.freeze)return;this.open=true}handleMouseOver(){if(this.freeze)return;this.open=true}handleMouseOut(){if(this.freeze)return;this.open=false}render(){if(!this.text){return o("slot",null)}return o("span",{part:"base",class:{tooltip:true,"tooltip--primary":this.type==="primary","tooltip--success":this.type==="success","tooltip--info":this.type==="info","tooltip--warning":this.type==="warning","tooltip--danger":this.type==="danger","tooltip--has-width":!!this.width},onClick:()=>this.handleClick(),onBlur:()=>this.handleBlur(),onFocus:()=>this.handleFocus(),onMouseOver:()=>this.handleMouseOver(),onMouseOut:()=>this.handleMouseOut()},o("slot",null),!!this.open&&o("div",{part:"text",ref:t=>this.tooltip=t,class:"tooltip-text",style:{top:`${this.top}px`,left:`${this.left}px`,...this.width?{"--sc-tooltip-width":this.width}:{}}},this.text))}get el(){return i(this)}static get watchers(){return{open:["handleOpenChange"]}}};n.style=e;export{s as sc_cc_logo,n as sc_tooltip};
//# sourceMappingURL=p-77123f93.entry.js.map