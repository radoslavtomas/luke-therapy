import{s as l,o as m,c as d,w as t,a as o,u as a,H as c,b as e,l as u,n as p,x as f}from"./app.88e591d6.js";import{_,a as w}from"./PrimaryButton.3300a951.js";import{_ as b,a as x,b as h}from"./TextInput.a92a3993.js";import"./ApplicationLogo.4b0259ba.js";import"./_plugin-vue_export-helper.cdc0426e.js";const g=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),V=["onSubmit"],v={class:"flex justify-end mt-4"},F={__name:"ConfirmPassword",setup(y){const s=l({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(C,r)=>(m(),d(_,null,{default:t(()=>[o(a(c),{title:"Confirm Password"}),g,e("form",{onSubmit:f(i,["prevent"])},[e("div",null,[o(b,{for:"password",value:"Password"}),o(x,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:a(s).password,"onUpdate:modelValue":r[0]||(r[0]=n=>a(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),o(h,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),e("div",v,[o(w,{class:p(["ml-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:t(()=>[u(" Confirm ")]),_:1},8,["class","disabled"])])],40,V)]),_:1}))}};export{F as default};