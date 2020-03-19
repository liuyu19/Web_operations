# 自制WAI指导原则中文版
本汉化WAI指导原则由[刘心如：学号183014132](https://github.com/LXRjiayou)，[刘宇：学号181043067](https://github.com/liuyu19)，[彭晴：学号181052067](https://github.com/aqiangwansui)共同翻译完成。分工如下，刘心如负责**摘要**，**提供信息丰富的独特页面标题**，**使用标题去传达意义和结构**；刘宇负责**让链接文本拥有意义**，**为图像编写有意义的替代文本**，**创建多媒体文字记录和字幕** 以及本文的排版与图片拷贝；彭晴负责**提供清晰的指令**，**保持内容的清晰和简洁**，**了解更多关于可访问性（的内容）**。
# Writing for Web Accessibility  
# 为Web可访问性编写
in Tips for Getting Started入门提示

### Summary摘要
This page introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the “Understanding” document, guidance from Tutorials, user stories, and more.  
本页介绍了一些基本的注意事项，以帮助您开始编写更便于残疾人访问的Web内容。这些提示是帮助您满足Web内容可访问性准则(WCAG)要求的良好实践。遵循相关WCAG要求的链接、“理解”文档中的详细背景、教程指导、用户故事等等。

### Page Contents页面内容  
Provide informative, unique page titles  
提供信息丰富的独特页面标题  
Use headings to convey meaning and structure  
使用标题传达意义和结构  
Make link text meaningful  
使链接文本有意义  
Write meaningful text alternatives for images  
为图像编写有意义的文本选项  
Create transcripts and captions for multimedia  
创建多媒体记录和字幕  
Provide clear instructions  
提供明确的指示  
Keep content clear and concise  
内容清晰简洁    
****
## Provide informative, unique page titles提供信息丰富的独特页面标题
For each web page, provide a short title that describes the page content and distinguishes it from other pages. The page title is often the same as the main heading of the page. Put the unique and most relevant information first; for example, put the name of the page before the name of the organization. For pages that are part of a multi-step process, include the current step in the page title.  
对于每个网页，提供一个简短的标题来描述页面内容并将其与其他页面区分开来。页面标题通常与页面的主标题相同。将唯一和最相关的信息放在第一位；例如，将页面名称放在组织名称之前。对于属于多步处理的页面，要在页面标题中包括当前步骤。  

### Example: Page Titles示例：页面标题
**√**   Home page title主页标题  
Space Teddy Inc.太空玩具有限公司  

**√**   Page name followed by organization name页面标题后面跟着组织标题  
Latest News • Space Teddy Inc.最新消息·太空玩具有限公司  

**√**   Page name including step in a process页面标题包括进程中的步骤   
Buy Your Bear (Step 1 of 3) • Space Teddy Inc.购买你的熊玩具（1-3步）·太空玩具有限公司  

#### More Information更多信息
* WCAG
 * Page Titled 2.4.2 (Understanding 2.4.2)
## Use headings to convey meaning and structure使用标题去传达意义和结构
Use short headings to group related paragraphs and clearly describe the sections. Good headings provide an outline of the content.  
使用简短的标题分组相关段落，并清楚地描述章节。好的标题能提供内容的大纲。

### Example: Using headings to organize content示例：使用标题去组织内容  
**×**  Lack of headings缺少标题  
![Lack of headings](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/headings-poor.png)  

  
**√**  Using headings and subheadings使用标题和副标题  
![Using headings and subheadings](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/headings-good.png)

#### More Information更多信息
* WCAG
 * Headings and Labels 2.4.6 (Understanding 2.4.6)  
   标题和标签2.4.6 (理解2.4.6)
 * Section Headings 2.4.10 (Understanding 2.4.10)  
   章节标题2.4.10 (理解2.4.10)
 * Info and Relationships 1.3.1 (Understanding 1.3.1)  
   信息和关系1.3.1 (理解1.3.1)
* User Story用户故事
 * How a screen reader user uses headings to navigate  
   电子书用户怎样使用标题去导航

****
## Make link text meaningful  让链接文本拥有意义
Write link text so that it describes the content of the link target. Avoid using ambiguous link text, such as ‘click here’ or ‘read more’. Indicate relevant information about the link target, such as document type and size, for example, ‘Proposal Documents (RTF, 20MB)’.  
编写链接文本来描述链接目标的内容。避免使用含糊不清的链接描述文字，例如说“点击这里”或者“了解更多”。注明链接目标的相关信息，例如文档类型和大小。范例：“投标文档(RTF, 20MB)”

### Example: Using link text to describe target page示例：使用链接文本描述目标页面
**×**  No information无信息
For more information on device independence, [click here]().   
 
有关设备独立性的更多信息，请[单击此处]()。

**√**  Meaningful information有意义的信息
Read more about [device independence]().  
阅读有关[设备独立性的更多信息]()。

#### More Information更多信息  
* WCAG
 * Link Purpose (In Context) 2.4.4 (Understanding 2.4.4)  
   链接目的（在上下文中）2.4.4（理解2.4.4）
 * Link Purpose (Link Only) 2.4.9 (Understanding 2.4.9)
   链接目的（仅链接）2.4.9（理解2.4.9）
****
## Write meaningful text alternatives for images为图像编写有意义的替代文本
For every image, write alternative text that provides the information or function of the image. For purely decorative images, there is no need to write alternative text.  
对每个图像编写包含图像信息或功能的替代文本。对于纯装饰性图像，无需编写替代文本。

### Example: Using alternative text to communicate important information示例：使用替代文本传达重要信息
**×**  Uninformative没有信息  
![phone_charging](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/phone_charging.png)   
Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.为手机充电：使用随附的电缆和电源适配器将手机连接至电源插座。  

Alternative text for image: "Charging phone"  
图片的替代文本：“正在为手机充电”
  

**√**  Informative有信息  
![phone_charging](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/phone_charging.png)

Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.为手机充电：使用随附的电缆和电源适配器将手机连接至电源插座。  

Alternative text for image: "Plug cable into the bottom edge of the phone."  
图片的替代文本：“将电缆插入电话的底部边缘。”

#### More Information更多信息
* WCAG
 * Non-text Content 1.1.1 (Understanding 1.1.1)  
   非文本内容1.1.1（理解1.1.1）
* Tutorial讲解
 * Images图片
* User Story用户的故事
 * Describes the value of text alternatives to a blind user  
   向盲人用户介绍替代文本的价值  
****
## Create transcripts and captions for multimedia创建多媒体文字记录和字幕
For audio-only content, such a podcast, provide a transcript. For audio and visual content, such as training videos, also provide captions. Include in the transcripts and captions the spoken information and sounds that are important for understanding the content, for example, ‘door creaks’. For video transcripts, also include a description of the important visual content, for example ‘Athan leaves the room’.  
对于纯音频内容（例如播客），请提供媒介。对于音频和视频内容（例如培训视频），也提供字幕。在成绩单和字幕中包括对理解内容很重要的语音信息和声音，例如“门吱吱作响”。对于视频成绩单，还包括重要视觉内容的描述，例如“ Athan离开房间”。

#### More Information
* WCAG  
 * Captions (Prerecorded) 1.2.2 (Understanding 1.2.2)  
   字幕（预先录制）1.2.2（理解1.2.2）  
 * Audio Description or Media Alternative (Prerecorded) 1.2.3 (Understanding 1.2.3)  
   音频或媒体替代描述（预先录制）1.2.3（了解1.2.3）  
* User Story  
  用户的故事  
 * Describes how captions help a deaf student  
   字幕如何帮助聋哑学生     
****
## Provide clear instructions提供清晰的指令
Ensure that instructions, guidance, and error messages are clear, easy to understand, and avoid unnecessarily technical language. Describe input requirements, such as date formats.  
确保这些错误的指令、指导和错误的信息是清晰的，便于理解的，和避免不必要的技术性语言。描述输入的需求，比如日期。  
![part3](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/part3.jpg)


****
## Keep content clear and concise保持内容的清晰和简洁
* Use simple language and formatting, as appropriate for the context.  
在适当的情况下，使用简洁的语言和排版。  
* Write in short, clear sentences and paragraphs.  
写简单明了的句子和段落。  
* Avoid using unnecessarily complex words and phrases. Consider providing a glossary for terms readers may not know.  
避免使用不必要且复杂的单词和短语，提供一个术语表给一些不知道的读者。  
* Expand acronyms on first use. For example, Web Content Accessibility Guidelines (WCAG).  
首次使用时请缩写。例如，Web内容可访问性指南（WCAG）
* Consider providing a glossary for terms readers may not know.  
提供一个术语表给一些不知道的读者
* Use list formatting as appropriate.  
适当使用列表格式
* Consider using images, illustrations, video, audio, and symbols to help clarify meaning.  
考虑使用一些图片、插图、视频、音频和符号来帮助阐明意思。 

### Example: Making content readable and understandable示例：
**×**   Unnecessarily complex不必要的复杂  
CPP: In the event of a vehicular collision, a company assigned representative will seek to ascertain the extent and cause of damages to property belonging to all parties involved. Once our representative obtains information that allows us to understand the causality, we may or may not assign appropriate monetary compensation. The resulting decision may occasion one of the following options: the claim is not approved and is assigned a rejected status, the status of the claim is ambiguous and will require additional information before further processing can occur, the claim is partially approved and reduced payment is assigned and issued, or claim is fully approved and total claim payment is assigned and issued.  
CPP：万一发生车辆碰撞，公司指派的代表将寻求查明所涉各方财产的损害程度和原因。一旦我们的代表获得使我们了解因果关系的信息，我们可能会分配也可能不会分配适当的货币补偿。最终的决定可能会出现以下选择之一：索赔未获批准并被指定为拒绝状态，索赔的状态不明确，在进一步处理之前将需要其他信息，部分索赔已获批准并且减免了付款。分配和签发，或者索赔已完全批准，并且分配了总索赔付款。


**√**   Easier to understand更易理解  
Claims Processing Procedure (CPP): If you have a car accident, our agent will investigate. Findings will determine any claim payment. This could result in:  
索赔处理程序（CPP）：如果您发生车祸，我们的代理商将进行调查。调查结果将确定任何索赔款项。这可能导致：

* Approved claim - full payment  
批准的索赔-全额付款  
* Partially approved claim - reduced payment  
部分批准的索赔-减少付款  
* Undetermined claim - more information needed   
未确定的索偿-需要更多信息  
* Rejected claim - no payment  
索赔被拒-不付款  

![clear_text_diagram](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/clear_text_diagram.png)

#### More Information更多信息
* WCAG
 * Reading Level 3.1.5 (Understanding 3.1.5)  
   阅读级别3.1.5（理解3.1.5）  
 * Unusual Words 3.1.3 (Understanding 3.1.3)  
   不寻常的单词3.1.3（理解3.1.3）  
 * Abbreviations 3.1.4 (Understanding 3.1.4)  
   缩写3.1.4（理解3.1.4）  
* User Story用户的故事
 * User with reading disabilities benefits from easy to read text  
   阅读障碍者受益于易于阅读的文本
****  
****
### Learn More About Accessibility了解更多关于可访问性（的内容）
These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.  
这些提示是一些你需要进行网络可访问的注意事项，以下资源可以帮助你学习可访问性为什么是重要的，和关于使残障人士更易访问网络的准则。

Accessibility Introduction — Introduces accessibility and provides links to many helpful resources  
可访问性的介绍——可访问性的介绍和一个提供很多资源的链接。  
Accessibility Principles — An introduction to the WCAG requirements  
可访问性的原则——一个介绍WCAG的要求。  
How people with disabilities use the web — Real-life examples showing the importance of accessibility for people with disabilities  
残疾人士如何使用网络——现实生活中的例子展示了残疾人无障碍获取的重要性。
How to Meet WCAG (Quick Reference) — customizable reference of all WCAG requirements and techniques  
如何满足WCAG（快速参考）——可定制参考所有WCAG要求和技术。  
  
  
  
 



****
****
****
****
更新于2020.3.19，以下内容为刘宇基于WAI原则的网站点评，我选择的网站是[腾讯体育](https://sports.qq.com/)官方网站。  
我将基于这七点来点评。  
* **提供信息丰富的独特页面标题**  
* **使用标题去传达意义和结构**  
* **让链接文本拥有意义**  
* **为图像编写有意义的替代文本**  
* **创建多媒体文字记录和字幕**   
* **提供清晰的指令**  
* **保持内容的清晰和简洁**  
  
![tc_sport](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/tc_sport.png)  
1.腾讯体育的页面有许多吸引眼球的标题，包含了许多文稿的关键信息，如"[雷霆宣布所有球员均未感染病毒 76人已完成球员检测](https://new.qq.com/rain/a/20200319A039D500)"，提供了有效的信息。  
2.它是新闻网站，由许多小的标题组成，也做到了**使用标题去传达意义和结构**，分有大标题和小标题，主次分明。   

![tc_sport2](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/tc_sport2.png)   
3.它的头部和底部都有许多链接文本，且描述的十分详细。  
4.**为图像编写有意义的替代文本**，腾讯体育的网站图片都有认真的命名，当这个网站并没有太多的专业描述性的图表，所以我没法对着条标准进行评判。  
5.创建多媒体文字记录和字幕，这一条标准腾讯体育完成的一般，有许多图片视频，但并不是都含有描述和字幕，特别是一些外国的体育新闻。 
6.**提供清晰的指令**，这一点在登录和*腾讯体育会员*充值等页面都非常清晰，绝对不会漏冲了会员。  
7.相较来说网页还是比较清爽，有侧边栏和导航栏，大小标题也十分清晰，图片视频占网页的比例也较为合理，保持了内容的清晰和简洁。