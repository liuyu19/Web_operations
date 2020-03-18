# 自制WAI指导原则中文版
（由[刘心如](https://github.com/LXRjiayou)，[彭晴](https://github.com/aqiangwansui)，[刘宇](https://github.com/liuyu19)共同完成）
# Writing for Web Accessibility
in Tips for Getting Started

### Summary
This page introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the “Understanding” document, guidance from Tutorials, user stories, and more.

### Page Contents
Provide informative, unique page titles
Use headings to convey meaning and structure
Make link text meaningful
Write meaningful text alternatives for images
Create transcripts and captions for multimedia
Provide clear instructions
Keep content clear and concise  
****
## Provide informative, unique page titles
For each web page, provide a short title that describes the page content and distinguishes it from other pages. The page title is often the same as the main heading of the page. Put the unique and most relevant information first; for example, put the name of the page before the name of the organization. For pages that are part of a multi-step process, include the current step in the page title.

### Example: Page Titles
 Home page title
Space Teddy Inc.
 Page name followed by organization name
Latest News • Space Teddy Inc.
 Page name including step in a process
Buy Your Bear (Step 1 of 3) • Space Teddy Inc.
#### More Information
WCAG
Page Titled 2.4.2 (Understanding 2.4.2)
## Use headings to convey meaning and structure
Use short headings to group related paragraphs and clearly describe the sections. Good headings provide an outline of the content.

### Example: Using headings to organize content  
**×**  Lack of headings

Illustration of no headings, see below for detailed example
View inline example

**√**  Using headings and subheadings  

Illustration of good heading structure, see below for detailed example
View inline example

#### More Information
WCAG
Headings and Labels 2.4.6 (Understanding 2.4.6)
Section Headings 2.4.10 (Understanding 2.4.10)
Info and Relationships 1.3.1 (Understanding 1.3.1)
User Story
How a screen reader user uses headings to navigate
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
