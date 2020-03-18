# 自制WAI指导原则中文版
（由[刘心如：学号183014132](https://github.com/LXRjiayou)，[彭晴：学号181052067](https://github.com/aqiangwansui)，[刘宇：学号181043067](https://github.com/liuyu19)共同完成）
分工如下，刘心如摘要，提供信息丰富的独特页面标题，
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

### Example: Page Titles例子：页面标题
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

### Example: Using headings to organize content例子：使用标题去组织内容  
**×**  Lack of headings缺少标题  
![Lack of headings](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/headings-poor.png)  

  
**√**  Using headings and subheadings使用标题和副标题  
![Using headings and subheadings](https://raw.githubusercontent.com/liuyu19/Web_operations/master/image/headings-good.png)

#### More Information更多信息
* WCAG
 * Headings and Labels 2.4.6 (Understanding 2.4.6)标题和标签2.4.6 (理解2.4.6)
 * Section Headings 2.4.10 (Understanding 2.4.10)章节标题2.4.10 (理解2.4.10)
 * Info and Relationships 1.3.1 (Understanding 1.3.1)信息和关系1.3.1 (理解1.3.1)
* User Story用户故事
 * How a screen reader user uses headings to navigate电子书用户怎样使用标题去导航

****
## Make link text meaningful  
## 让链接文本拥有意义
Write link text so that it describes the content of the link target. Avoid using ambiguous link text, such as ‘click here’ or ‘read more’. Indicate relevant information about the link target, such as document type and size, for example, ‘Proposal Documents (RTF, 20MB)’.  
编写链接文本来描述链接目标的内容。避免使用含糊不清的链接描述文字，例如说“点击这里”或者“了解更多”。注明链接目标的相关信息，例如文档类型和大小。范例：“投标文档(RTF, 20MB)”

### Example: Using link text to describe target page
**×**  No information
For more information on device independence, click here.

**√**  Meaningful information
Read more about device independence.

#### More Information
WCAG
Link Purpose (In Context) 2.4.4 (Understanding 2.4.4)
Link Purpose (Link Only) 2.4.9 (Understanding 2.4.9)
****
## Write meaningful text alternatives for images
For every image, write alternative text that provides the information or function of the image. For purely decorative images, there is no need to write alternative text.

### Example: Using alternative text to communicate important information
 Uninformative
Charging phone
Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.

Alternative text for image: "Charging phone"

 Informative
Plug cable into the bottom edge of the phone.
Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.

Alternative text for image: "Plug cable into the bottom edge of the phone."

Alternative text is usually not visible; it is included in this example just so you can see what it is.

#### More Information
WCAG
Non-text Content 1.1.1 (Understanding 1.1.1)
Tutorial
Images
User Story
Describes the value of text alternatives to a blind user  
****
## Create transcripts and captions for multimedia
For audio-only content, such a podcast, provide a transcript. For audio and visual content, such as training videos, also provide captions. Include in the transcripts and captions the spoken information and sounds that are important for understanding the content, for example, ‘door creaks’. For video transcripts, also include a description of the important visual content, for example ‘Athan leaves the room’.

#### More Information
WCAG
Captions (Prerecorded) 1.2.2 (Understanding 1.2.2)
Audio Description or Media Alternative (Prerecorded) 1.2.3 (Understanding 1.2.3)
User Story
Describes how captions help a deaf student  
****
## Provide clear instructions
Ensure that instructions, guidance, and error messages are clear, easy to understand, and avoid unnecessarily technical language. Describe input requirements, such as date formats.

### Example: Instructions communicate what information the user should provide
Password should be at least six characters with at least one number (0-9).

Password 
### Example: Error indicates what the problem is and, possibly, how to fix it
 The username 'superbear' is already in use.
 The password needs to include at least one number.
#### More Information
WCAG
Labels or Instructions 3.3.2 (Understanding 3.3.2)
User Story
Describes simple instructions help someone with learning difficulties
****
## Keep content clear and concise
Use simple language and formatting, as appropriate for the context.

Write in short, clear sentences and paragraphs.
Avoid using unnecessarily complex words and phrases. Consider providing a glossary for terms readers may not know.
Expand acronyms on first use. For example, Web Content Accessibility Guidelines (WCAG).
Consider providing a glossary for terms readers may not know.
Use list formatting as appropriate.
Consider using images, illustrations, video, audio, and symbols to help clarify meaning.
### Example: Making content readable and understandable
 Unnecessarily complex
CPP: In the event of a vehicular collision, a company assigned representative will seek to ascertain the extent and cause of damages to property belonging to all parties involved. Once our representative obtains information that allows us to understand the causality, we may or may not assign appropriate monetary compensation. The resulting decision may occasion one of the following options: the claim is not approved and is assigned a rejected status, the status of the claim is ambiguous and will require additional information before further processing can occur, the claim is partially approved and reduced payment is assigned and issued, or claim is fully approved and total claim payment is assigned and issued.

 Easier to understand
Claims Processing Procedure (CPP): If you have a car accident, our agent will investigate. Findings will determine any claim payment. This could result in:

Approved claim - full payment
Partially approved claim - reduced payment
Undetermined claim - more information needed
Rejected claim - no payment


#### More Information
WCAG
Reading Level 3.1.5 (Understanding 3.1.5)
Unusual Words 3.1.3 (Understanding 3.1.3)
Abbreviations 3.1.4 (Understanding 3.1.4)
User Story
User with reading disabilities benefits from easy to read text
****  
****
### Learn More About Accessibility
These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.

Accessibility Introduction — Introduces accessibility and provides links to many helpful resources
Accessibility Principles — An introduction to the WCAG requirements
How people with disabilities use the web — Real-life examples showing the importance of accessibility for people with disabilities
How to Meet WCAG (Quick Reference) — customizable reference of all WCAG requirements and techniques
