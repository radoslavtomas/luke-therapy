import{s as u,o as i,c as d,w as m,a,u as e,H as c,g as _,t as f,m as p,b as t,l as w,n as g,x as b}from"./app.88e591d6.js";import{_ as x,a as y}from"./PrimaryButton.3300a951.js";import{_ as k,a as h,b as V}from"./TextInput.a92a3993.js";import"./ApplicationLogo.4b0259ba.js";import"./_plugin-vue_export-helper.cdc0426e.js";const v=t("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),N={key:0,class:"mb-4 font-medium text-sm text-green-600"},$=["onSubmit"],B={class:"flex items-center justify-end mt-4"},j={__name:"ForgotPassword",props:{status:String},setup(o){const s=u({email:""}),r=()=>{s.post(route("password.email"))};return(F,l)=>(i(),d(x,null,{default:m(()=>[a(e(c),{title:"Forgot Password"}),v,o.status?(i(),_("div",N,f(o.status),1)):p("",!0),t("form",{onSubmit:b(r,["prevent"])},[t("div",null,[a(k,{for:"email",value:"Email"}),a(h,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:e(s).email,"onUpdate:modelValue":l[0]||(l[0]=n=>e(s).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(V,{class:"mt-2",message:e(s).errors.email},null,8,["message"])]),t("div",B,[a(y,{class:g({"opacity-25":e(s).processing}),disabled:e(s).processing},{default:m(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],40,$)]),_:1}))}};export{j as default};